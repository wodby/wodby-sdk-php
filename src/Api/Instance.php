<?php declare (strict_types=1);

namespace Wodby\Api;

use GuzzleHttp\RequestOptions;

class Instance extends ApiAbstract
{
    /**
     * @param string $id
     * @return \Wodby\Api\Entity\Instance
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function load($id)
    {
        $response = $this->makeRequest(self::METHOD_GET, "instances/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return new Entity\Instance($data);
    }

    /**
     * @param string $appId
     * @param string $name
     * @return null|\Wodby\Api\Entity\Instance
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function findByName($appId, $name)
    {
        $instances = $this->loadAll($appId);

        foreach ($instances as $instance) {
            /** @var Entity\Instance $instance */
            if ($instance['name'] == $name) {
                return $instance;
            }
        }

        return null;
    }

    /**
     * @param string $appId
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadAll($appId)
    {
        $response = $this->makeRequest(self::METHOD_GET, "apps/$appId/instances");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);
        $orgs = [];

        foreach ($data as $item) {
            $orgs[] = new Entity\Instance($item);
        }

        return $orgs;
    }

    /**
     * @param string $appId
     * @param string $name
     * @param string $type
     * @param string $serverId
     * @param array $import
     * @param null|string $title
     * @param null|string $branch
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create($appId, $name, $type, $serverId, array $import = [], $title = null, $branch = null)
    {
        $allowedTypes = [
            Entity\Instance::TYPE_DEV,
            Entity\Instance::TYPE_STAGE,
            Entity\Instance::TYPE_PROD,
        ];

        if (!in_array($type, $allowedTypes)) {
            throw new Exception\InvalidArgument();
        }

        $requestOptions = [
            'name' => $name,
            'type' => $type,
            'title' => $title ?: $name,
            'branch' => $branch,
            'server_id' => $serverId,
        ];

        if ($import) {
            $allowedComponents = [
                Entity\Instance::COMPONENT_DATABASE,
                Entity\Instance::COMPONENT_FILES,
            ];

            $requestOptions['import'] = [];

            foreach ($import as $component => $instanceId) {
                if (!in_array($component, $allowedComponents)) {
                    throw new Exception\InvalidArgument();
                }

                $requestOptions['import'][$component] = $instanceId;
            }
        }

        $response = $this->makeRequest(self::METHOD_POST, "apps/$appId/instances",
            [RequestOptions::JSON => $requestOptions]);

        $data = json_decode($response->getBody()->getContents(), true);

        return [
            'instance' => new Entity\Instance($data['instance']),
            'task' => new Entity\Task($data['task']),
        ];
    }

    /**
     * @param string $id
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($id)
    {
        $response = $this->makeRequest(self::METHOD_DELETE, "instances/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }

    /**
     * @param string $id
     * @param array|NULL $git
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deployCodebase($id, array $git = null)
    {
        $requestOptions = [];

        if (!empty($git)) {

            if (count($git) != 2) {
                throw new Exception\InvalidArgument();
            }

            if (!in_array($git[0], [Entity\Instance::GIT_BRANCH, Entity\Instance::GIT_TAG])) {
                throw new Exception\InvalidArgument();
            }

            $requestOptions[RequestOptions::JSON] = [$git[0] => $git[1]];
        }

        $response = $this->makeRequest(self::METHOD_POST, "instances/$id/deploy", $requestOptions);
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }

    /**
     * @param string $id
     * @param string $codebaseUri
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function importCodebase($id, $codebaseUri)
    {
        return $this->importFromFiles($id, [Entity\Instance::COMPONENT_CODEBASE => $codebaseUri]);
    }

    /**
     * @param $id
     * @param array $files
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function importFromFiles($id, array $files)
    {
        $allowedComponents = [
            Entity\Instance::COMPONENT_DATABASE,
            Entity\Instance::COMPONENT_FILES,
            Entity\Instance::COMPONENT_CODEBASE,
        ];

        $requestOptions = [];

        foreach ($files as $component => $fileUri) {
            if (!in_array($component, $allowedComponents)) {
                throw new Exception\InvalidArgument();
            }

            $requestOptions[$component] = $fileUri;
        }

        $response = $this->makeRequest(self::METHOD_POST, "instances/$id/import/files",
            [RequestOptions::JSON => $requestOptions]);

        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }

    /**
     * @param $id
     * @param array $instances
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function importFromInstances($id, array $instances)
    {
        $allowedComponents = [
            Entity\Instance::COMPONENT_DATABASE,
            Entity\Instance::COMPONENT_FILES,
        ];

        $requestOptions = [];

        foreach ($instances as $component => $instanceId) {
            if (!in_array($component, $allowedComponents)) {
                throw new Exception\InvalidArgument();
            }

            $requestOptions[$component] = $instanceId;
        }

        $response = $this->makeRequest(self::METHOD_POST, "instances/$id/import/instances",
            [RequestOptions::JSON => $requestOptions]);

        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }

    /**
     * @param $id
     * @param $name
     * @param $value
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateProperty($id, $name, $value)
    {
        $name = str_replace('_', '-', $name);
        $response = $this->makeRequest(self::METHOD_PUT, "instances/$id/properties/$name",
            [RequestOptions::JSON => ['value' => $value]]);

        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }
}

<?php declare (strict_types=1);

namespace Wodby\Api;

use GuzzleHttp\RequestOptions;

class Application extends ApiAbstract
{
    /**
     * @param string $id
     * @return \Wodby\Api\Entity\Application
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function load($id)
    {
        $response = $this->makeRequest(self::METHOD_GET, "apps/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return new Entity\Application($data);
    }

    /**
     * @param string $orgId
     * @return array
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadAll($orgId)
    {
        $response = $this->makeRequest(self::METHOD_GET, "orgs/$orgId/apps");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);
        $apps = [];

        foreach ($data as $item) {
            $apps[] = new Entity\Application($item);
        }

        return $apps;
    }

    /**
     * @param string $orgId
     * @param string $name
     * @param string $bundle
     * @param string $repoId
     * @param null|string $title
     * @param array $services
     * @param null|string $docroot
     * @param null|string $siteName
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(
        $orgId,
        $name,
        $bundle,
        $repoId,
        $title = null,
        array $services = [],
        $docroot = null,
        $siteName = null
    ) {

        $requestOptions = [
            'name' => $name,
            'bundle' => $bundle,
            'repository_id' => $repoId,
            'title' => $title,
            'services' => $services,
            'docroot' => $docroot,
            'site_name' => $siteName,
        ];

        $response = $this->makeRequest(self::METHOD_POST, "orgs/$orgId/apps",
            [RequestOptions::JSON => $requestOptions]);

        $data = json_decode($response->getBody()->getContents(), true);

        return [
            'application' => new Entity\Application($data['application']),
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
        $response = $this->makeRequest(self::METHOD_DELETE, "apps/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return ['task' => new Entity\Task($data['task'])];
    }
}

<?php

namespace Wodby\Api;


use \GuzzleHttp\RequestOptions;

class Instance extends ApiAbstract {

  /**
   * @param string $id
   * @return \Wodby\Api\Entity\Instance
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function load($id) {
    $response = $this->makeRequest(self::METHOD_GET, "instances/$id");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\Instance($data);
  }

  public function loadAll($appId) {
    $response = $this->makeRequest(self::METHOD_GET, "apps/$appId/instances");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);
    $orgs = [];

    foreach ($data as $item) {
      $orgs[] = new Entity\Instance($item);
    }

    return $orgs;
  }

  /**
   * @param string $appId
   * @param string $name
   * @return null|\Wodby\Api\Entity\Instance
   */
  public function findByName($appId, $name) {
    $instances = $this->loadAll($appId);

    foreach ($instances as $instance) {
      /** @var Entity\Instance $instance */
      if ($instance['name'] == $name) {
        return $instance;
      }
    }

    return NULL;
  }

  public function create($appId, array $properties) {
    $response = $this->makeRequest(self::METHOD_POST, "apps/$appId/instances", [RequestOptions::JSON => $properties]);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return [
      'instance' => new Entity\Instance($data['instance']),
      'task' => new Entity\Task($data['task']),
    ];
  }

  public function delete($id) {
    $response = $this->makeRequest(self::METHOD_DELETE, "instances/$id");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return ['task' => new Entity\Task($data['task'])];
  }

  public function deployCodebase($id, array $git = null) {
    $requestOptions = [];

    if (!empty($git)) {

      if (count($git) != 2) {
        throw new Exception\InvalidArgument();
      }

      if (!in_array($git[0], [Entity\Instance::GIT_BRANCH, Entity\Instance::GIT_TAG])) {
        throw new Exception\InvalidArgument();
      }

      $requestOptions[RequestOptions::JSON] = [
        $git[0] => $git[1],
      ];
    }

    $response = $this->makeRequest(self::METHOD_POST, "instances/$id/deploy", $requestOptions);
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return ['task' => new Entity\Task($data['task'])];
  }

  public function importFromFiles(Entity\Instance $instance, array $data) {
    //
  }

  public function importFromInstances(Entity\Instance $instance, array $data) {
    //
  }
}

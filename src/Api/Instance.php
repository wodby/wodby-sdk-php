<?php

namespace Wodby\Api;


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

  public function create(Entity\Application $app, array $properties) {
    //
  }

  public function delete($id) {
    $response = $this->makeRequest(self::METHOD_DELETE, "instances/$id");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return $data;
  }

  public function deploy(Entity\Instance $instance) {
    //
  }

  public function importFromFiles(Entity\Instance $instance, array $data) {
    //
  }

  public function importFromInstances(Entity\Instance $instance, array $data) {
    //
  }
}

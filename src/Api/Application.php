<?php

namespace Wodby\Api;


class Application extends ApiAbstract {

  /**
   * @param string $id
   * @return \Wodby\Api\Entity\Application
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function load($id) {
    $response = $this->makeRequest(self::METHOD_GET, "apps/$id");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\Application($data);
  }

  /**
   * @param string $orgId
   * @return array
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function loadAll($orgId) {
    $response = $this->makeRequest(self::METHOD_GET, "orgs/$orgId/apps");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);
    $apps = [];

    foreach ($data as $item) {
      $apps[] = new Entity\Application($item);
    }

    return $apps;
  }
}

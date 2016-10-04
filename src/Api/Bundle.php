<?php

namespace Wodby\Api;


class Bundle extends ApiAbstract {

  /**
   * @param string $name
   * @return \Wodby\Api\Entity\Bundle
   */
  public function loadByName($name) {
    $response = $this->makeRequest(self::METHOD_GET, "bundles/$name");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\Bundle($data);
  }

  /**
   * @return array
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function loadAll() {
    $response = $this->makeRequest(self::METHOD_GET, 'bundles');
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);
    $bundles = [];

    foreach ($data as $item) {
      $bundles[] = new Entity\Bundle($item);
    }

    return $bundles;
  }
}

<?php

namespace Wodby\Api;


class User extends ApiAbstract {

  /**
   * @return \Wodby\Api\Entity\User
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function load() {
    $response = $this->makeRequest(self::METHOD_GET, 'user');
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\User($data);
  }
}

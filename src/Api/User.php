<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 10/3/16
 * Time: 3:06 PM
 */

namespace Wodby\Api;


use \Wodby\Api\Exception\UnexpectedStatusCode;

class User extends ApiAbstract {

  public function load() {
    $response = $this->makeRequest(self::METHOD_GET, 'user');

    if ($response->getStatusCode() != 200) {
      throw new UnexpectedStatusCode("Unexpected response code: {$response->getStatusCode()}");
    }

    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\User($data);
  }
}

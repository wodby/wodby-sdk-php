<?php

namespace Wodby;


use Wodby\Api\ApiAbstract;
use Wodby\Api\User;

class Api extends ApiAbstract {

  /**
   * @return \Wodby\Api\User
   */
  public function user() {
    return new User($this->getAccessToken(), $this->getHttpClient());
  }
}

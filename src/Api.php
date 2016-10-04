<?php

namespace Wodby;


use Wodby\Api\ApiAbstract;

class Api extends ApiAbstract {

  /**
   * @return \Wodby\Api\User
   */
  public function user() {
    return new Api\User($this->getAccessToken(), $this->getHttpClient());
  }

  /**
   * @return \Wodby\Api\Organization
   */
  public function organization() {
    return new Api\Organization($this->getAccessToken(), $this->getHttpClient());
  }

  /**
   * @return \Wodby\Api\Bundle
   */
  public function bundle() {
    return new Api\Bundle($this->getAccessToken(), $this->getHttpClient());
  }

  /**
   * @return \Wodby\Api\Task
   */
  public function task() {
    return new Api\Task($this->getAccessToken(), $this->getHttpClient());
  }

  /**
   * @return \Wodby\Api\Application
   */
  public function application() {
    return new Api\Application($this->getAccessToken(), $this->getHttpClient());
  }

  /**
   * @return \Wodby\Api\Instance
   */
  public function instance() {
    return new Api\Instance($this->getAccessToken(), $this->getHttpClient());
  }
}

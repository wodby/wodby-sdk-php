<?php

namespace Wodby\Api\Entity;


class Repository extends EntityAbstract {

  /**
   * @var string
   */
  private $id;

  /**
   * @var string
   */
  private $title;

  /**
   * @var string
   */
  private $uri;

  /**
   * @var string
   */
  private $triggerUri;

  /**
   * @var string
   */
  private $publicKey;

  /**
   * Repository constructor.
   * @param array $properties
   */
  public function __construct(array $properties) {
    $this->id = $properties['id'];
    $this->title = $properties['title'];
    $this->uri = $properties['uri'];
    $this->triggerUri = $properties['$trigger_uri'];
    $this->publicKey = $properties['public_key'];
  }

  /**
   * @return string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getUri() {
    return $this->uri;
  }

  /**
   * @return string
   */
  public function getTriggerUri() {
    return $this->triggerUri;
  }

  /**
   * @return string
   */
  public function getPublicKey() {
    return $this->publicKey;
  }
}

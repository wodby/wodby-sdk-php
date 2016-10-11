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
  private $url;

  /**
   * @var string
   */
  private $triggerUrl;

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
    $this->url = $properties['url'];
    $this->triggerUrl = $properties['trigger_url'];
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
  public function getUrl() {
    return $this->url;
  }

  /**
   * @return string
   */
  public function getTriggerUrl() {
    return $this->triggerUrl;
  }

  /**
   * @return string
   */
  public function getPublicKey() {
    return $this->publicKey;
  }
}

<?php

namespace Wodby\Api\Entity;


class Task extends EntityAbstract {

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
  private $status;

  /**
   * @var string
   */
  private $ipAddress;

  /**
   * @var string
   */
  private $hostname;

  /**
   * @var string
   */
  private $version;

  /**
   * Task constructor.
   * @param array $properties
   */
  public function __construct(array $properties) {
    $this->id = $properties['id'];
    $this->title = $properties['title'];
    $this->ipAddress = $properties['ip_address'];
    $this->hostname = $properties['hostname'];
    $this->version = $properties['version'];
    $this->status = $properties['status'];
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
  public function getStatus() {
    return $this->status;
  }

  /**
   * @return string
   */
  public function getIpAddress() {
    return $this->ipAddress;
  }

  /**
   * @return string
   */
  public function getHostname() {
    return $this->hostname;
  }

  /**
   * @return string
   */
  public function getVersion() {
    return $this->version;
  }
}

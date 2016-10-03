<?php

namespace Wodby\Api\Entity;


class Instance extends EntityAbstract {

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
  private $name;

  /**
   * @var string
   */
  private $type;

  /**
   * @var string
   */
  private $status;

  /**
   * @var array
   */
  private $properties;

  /**
   * @var Repository
   */
  private $repository;

  /**
   * @var Server
   */
  private $server;

  /**
   * @var array of Domain
   */
  private $domains;

  /**
   * Instance constructor.
   * @param array $properties
   */
  public function __construct(array $properties) {
    $this->id = $properties['id'];
    $this->title = $properties['title'];
    $this->name = $properties['name'];
    $this->type = $properties['type'];
    $this->status = $properties['status'];
    $this->properties = !empty($properties['properties']) ? $properties['properties'] : [];
    $this->server = !empty($properties['server']) ? new Server($properties['server']) : NULL;
    $this->domains = [];

    if (!empty($properties['domains'])) {
      foreach ($properties['domains'] as $item) {
        $this->domains[] = new Domain($item);
      }
    }
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
  public function getName() {
    return $this->name;
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
  public function getDocroot() {
    return $this->docroot;
  }

  /**
   * @return \Wodby\Api\Entity\Repository
   */
  public function getRepository() {
    return $this->repository;
  }

  /**
   * @return string
   */
  public function getSiteName() {
    return $this->site_name;
  }
}

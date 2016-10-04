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
   * @var int
   */
  private $start;

  /**
   * @var int
   */
  private $end;

  /**
   * @var int
   */
  private $ttl;

  /**
   * @var string
   */
  private $stepTitle;

  /**
   * @var int
   */
  private $progress;

  /**
   * Task constructor.
   * @param array $properties
   */
  public function __construct(array $properties) {
    $this->id = $properties['id'];
    $this->title = $properties['title'];
    $this->status = $properties['status'];
    $this->start = (int) $properties['start'];
    $this->end = !empty($properties['end']) ? (int) $properties['end'] : NULL;
    $this->ttl = (int) $properties['ttl'];
    $this->stepTitle = $properties['step_title'];
    $this->progress = !empty($properties['progress']) ? (int) $properties['progress'] : NULL;
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
   * @return int
   */
  public function getStart() {
    return $this->start;
  }

  /**
   * @return int
   */
  public function getEnd() {
    return $this->end;
  }

  /**
   * @return int
   */
  public function getTtl() {
    return $this->ttl;
  }

  /**
   * @return string
   */
  public function getStepTitle() {
    return $this->stepTitle;
  }

  /**
   * @return int
   */
  public function getProgress() {
    return $this->progress;
  }
}

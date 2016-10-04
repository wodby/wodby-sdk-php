<?php

namespace Wodby\Api;


class Task extends ApiAbstract {

  /**
   * @param string $id
   * @return \Wodby\Api\Entity\Task
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function load($id) {
    $response = $this->makeRequest(self::METHOD_GET, "tasks/$id");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);

    return new Entity\Task($data);
  }

  /**
   * @param string $orgId
   * @return array
   * @throws \Wodby\Api\Exception\UnexpectedStatusCode
   */
  public function loadTasksInProgress($orgId) {
    $response = $this->makeRequest(self::METHOD_GET, "orgs/$orgId/tasks");
    $this->checkStatusCode($response->getStatusCode(), 200);
    $data = json_decode($response->getBody()->getContents(), TRUE);
    $tasks = [];

    foreach ($data as $item) {
      $tasks[] = new Entity\Task($item);
    }

    return $tasks;
  }

  /**
   * @param string $taskId
   * @param int $timeout
   * @return \Wodby\Api\Entity\Task
   * @throws \Wodby\Api\Exception\TaskCanceled
   * @throws \Wodby\Api\Exception\TaskFailed
   * @throws \Wodby\Api\Exception\TaskTimeout
   */
  public function wait($taskId, $timeout = 180) {
    $started = time();

    while (time() - $started <= $timeout) {
      $task = $this->load($taskId);
      $status = strtolower($task->getStatus());

      if (in_array($status, [Entity\Task::STATUS_WAITING, Entity\Task::STATUS_IN_PROGRESS])) {
        // Wait 5 seconds.
        sleep(5);
        continue;
      }

      if ($status == Entity\Task::STATUS_DONE) {
        return $task;
      }

      if ($status == Entity\Task::STATUS_FAILED) {
        throw new Exception\TaskFailed("Task \"$taskId\" failed");
      }

      if ($status == Entity\Task::STATUS_CANCELED) {
        throw new Exception\TaskCanceled("Task \"$taskId\" canceled");
      }
    }

    throw new Exception\TaskTimeout("Task \"$taskId\" timeout");
  }
}

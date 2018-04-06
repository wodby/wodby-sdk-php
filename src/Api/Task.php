<?php declare (strict_types=1);

namespace Wodby\Api;

class Task extends ApiAbstract
{
    /**
     * @param string $orgId
     * @return array
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadTasksInProgress($orgId)
    {
        $response = $this->makeRequest(self::METHOD_GET, "orgs/$orgId/tasks");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);
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
     * @throws Exception\TaskCanceled
     * @throws Exception\TaskFailed
     * @throws Exception\TaskTimeout
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function wait($taskId, $timeout = 180)
    {
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

    /**
     * @param string $id
     * @return \Wodby\Api\Entity\Task
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function load($id)
    {
        $response = $this->makeRequest(self::METHOD_GET, "tasks/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return new Entity\Task($data);
    }
}

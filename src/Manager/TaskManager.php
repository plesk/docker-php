<?php

namespace Docker\Manager;

class TaskManager extends BaseManager
{
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->taskList($parameters, $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->taskInspect(urlencode($id), $fetch);
    }
}

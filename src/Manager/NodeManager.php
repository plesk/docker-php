<?php

namespace Docker\Manager;

class NodeManager extends BaseManager
{
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->nodeList($parameters, $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->nodeInspect(urlencode($id), $fetch);
    }
}

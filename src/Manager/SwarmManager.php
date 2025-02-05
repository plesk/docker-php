<?php

namespace Docker\Manager;

class SwarmManager extends BaseManager
{
    public function initialize(\Docker\API\Model\SwarmInitPostBody $swarmConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->swarmInit($swarmConfig, $fetch);
    }

    public function join(\Docker\API\Model\SwarmJoinPostBody $swarmJoinConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->swarmJoin($swarmJoinConfig, $fetch);
    }

    public function leave($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->swarmLeave($parameters, $fetch);
    }

    public function update(\Docker\API\Model\SwarmSpec $swarmUpdateConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->swarmUpdate($swarmUpdateConfig, $parameters, $fetch);
    }
}

<?php

namespace Docker\Manager;

class NetworkManager extends BaseManager
{
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkList($parameters, $fetch);
    }

    public function remove($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkDelete(urlencode($id), $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkInspect(urlencode($id), $fetch);
    }

    public function create(\Docker\API\Model\NetworksCreatePostBody $networkConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkCreate($networkConfig, $fetch);
    }

    public function connect($id, \Docker\API\Model\NetworksIdConnectPostBody $container, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkConnect(urlencode($id), $container, $fetch);
    }

    public function disconnect($id, \Docker\API\Model\NetworksIdDisconnectPostBody $container, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->networkDisconnect(urlencode($id), $container, $fetch);
    }
}

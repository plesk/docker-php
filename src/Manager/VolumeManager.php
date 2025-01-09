<?php

namespace Docker\Manager;

class VolumeManager extends BaseManager
{
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->volumeList($parameters, $fetch);
    }

    public function create(\Docker\API\Model\VolumesCreatePostBody $volumeConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->volumeCreate($volumeConfig, $fetch);
    }

    public function remove($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->volumeDelete(urlencode($name), $parameters, $fetch);
    }

    public function find($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->volumeInspect(urlencode($name), $fetch);
    }
}

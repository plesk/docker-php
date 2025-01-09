<?php

namespace Docker\Manager;

class ServiceManager extends BaseManager
{
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->serviceList($parameters, $fetch);
    }

    public function create(\Docker\API\Model\ServicesCreatePostBody $serviceSpec, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $headerParameters = [];
        $this->extractRegistryAuth($parameters, $headerParameters);

        return $this->api->serviceCreate($serviceSpec, $headerParameters, $fetch);
    }

    public function remove($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->serviceDelete(urlencode($id), $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->serviceInspect(urlencode($id), $parameters, $fetch);
    }

    public function update($id, \Docker\API\Model\ServicesIdUpdatePostBody $serviceSpec, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $headerParameters = [];
        $this->extractRegistryAuth($parameters, $headerParameters);

        return $this->api->serviceUpdate(urlencode($id), $serviceSpec, $parameters, $headerParameters, $fetch);
    }
}

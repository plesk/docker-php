<?php

namespace Docker\API\Model;

class ConfigVolumes
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var mixed|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @return mixed
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param mixed $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
}
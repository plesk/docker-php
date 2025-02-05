<?php

namespace Docker\API\Model;

class PortStatus
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
     * @var list<EndpointPortConfig>|null
     */
    protected $ports;
    /**
     * 
     *
     * @return list<EndpointPortConfig>|null
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }
    /**
     * 
     *
     * @param list<EndpointPortConfig>|null $ports
     *
     * @return self
     */
    public function setPorts(?array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
}
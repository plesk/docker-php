<?php

namespace Docker\API\Model;

class ContainerSummaryNetworkSettings
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
     * @var array<string, EndpointSettings>|null
     */
    protected $networks;
    /**
     * 
     *
     * @return array<string, EndpointSettings>|null
     */
    public function getNetworks(): ?iterable
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param array<string, EndpointSettings>|null $networks
     *
     * @return self
     */
    public function setNetworks(?iterable $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
}
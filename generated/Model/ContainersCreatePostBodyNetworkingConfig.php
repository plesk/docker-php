<?php

namespace Docker\API\Model;

class ContainersCreatePostBodyNetworkingConfig
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
     * A mapping of network name to endpoint configuration for that network.
     *
     * @var array<string, EndpointSettings>|null
     */
    protected $endpointsConfig;
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @return array<string, EndpointSettings>|null
     */
    public function getEndpointsConfig(): ?iterable
    {
        return $this->endpointsConfig;
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @param array<string, EndpointSettings>|null $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(?iterable $endpointsConfig): self
    {
        $this->initialized['endpointsConfig'] = true;
        $this->endpointsConfig = $endpointsConfig;
        return $this;
    }
}
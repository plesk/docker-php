<?php

namespace Docker\API\Model;

class NetworksIdConnectPostBody
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
     * The ID or name of the container to connect to the network.
     *
     * @var string|null
     */
    protected $container;
    /**
     * Configuration for a network endpoint.
     *
     * @var EndpointSettings|null
     */
    protected $endpointConfig;
    /**
     * The ID or name of the container to connect to the network.
     *
     * @return string|null
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }
    /**
     * The ID or name of the container to connect to the network.
     *
     * @param string|null $container
     *
     * @return self
     */
    public function setContainer(?string $container): self
    {
        $this->initialized['container'] = true;
        $this->container = $container;
        return $this;
    }
    /**
     * Configuration for a network endpoint.
     *
     * @return EndpointSettings|null
     */
    public function getEndpointConfig(): ?EndpointSettings
    {
        return $this->endpointConfig;
    }
    /**
     * Configuration for a network endpoint.
     *
     * @param EndpointSettings|null $endpointConfig
     *
     * @return self
     */
    public function setEndpointConfig(?EndpointSettings $endpointConfig): self
    {
        $this->initialized['endpointConfig'] = true;
        $this->endpointConfig = $endpointConfig;
        return $this;
    }
}
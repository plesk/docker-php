<?php

namespace Docker\API\Model;

class ServiceEndpoint
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
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec|null
     */
    protected $spec;
    /**
     * 
     *
     * @var list<EndpointPortConfig>|null
     */
    protected $ports;
    /**
     * 
     *
     * @var list<ServiceEndpointVirtualIPsItem>|null
     */
    protected $virtualIPs;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @return EndpointSpec|null
     */
    public function getSpec(): ?EndpointSpec
    {
        return $this->spec;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @param EndpointSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?EndpointSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
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
    /**
     * 
     *
     * @return list<ServiceEndpointVirtualIPsItem>|null
     */
    public function getVirtualIPs(): ?array
    {
        return $this->virtualIPs;
    }
    /**
     * 
     *
     * @param list<ServiceEndpointVirtualIPsItem>|null $virtualIPs
     *
     * @return self
     */
    public function setVirtualIPs(?array $virtualIPs): self
    {
        $this->initialized['virtualIPs'] = true;
        $this->virtualIPs = $virtualIPs;
        return $this;
    }
}
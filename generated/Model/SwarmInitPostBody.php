<?php

namespace Docker\API\Model;

class SwarmInitPostBody
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
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @var string|null
     */
    protected $listenAddr;
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @var string|null
     */
    protected $advertiseAddr;
    /**
     * Force creation of a new swarm.
     *
     * @var bool|null
     */
    protected $forceNewCluster;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @return string|null
     */
    public function getListenAddr(): ?string
    {
        return $this->listenAddr;
    }
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @param string|null $listenAddr
     *
     * @return self
     */
    public function setListenAddr(?string $listenAddr): self
    {
        $this->initialized['listenAddr'] = true;
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @return string|null
     */
    public function getAdvertiseAddr(): ?string
    {
        return $this->advertiseAddr;
    }
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @param string|null $advertiseAddr
     *
     * @return self
     */
    public function setAdvertiseAddr(?string $advertiseAddr): self
    {
        $this->initialized['advertiseAddr'] = true;
        $this->advertiseAddr = $advertiseAddr;
        return $this;
    }
    /**
     * Force creation of a new swarm.
     *
     * @return bool|null
     */
    public function getForceNewCluster(): ?bool
    {
        return $this->forceNewCluster;
    }
    /**
     * Force creation of a new swarm.
     *
     * @param bool|null $forceNewCluster
     *
     * @return self
     */
    public function setForceNewCluster(?bool $forceNewCluster): self
    {
        $this->initialized['forceNewCluster'] = true;
        $this->forceNewCluster = $forceNewCluster;
        return $this;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @return SwarmSpec|null
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @param SwarmSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
}
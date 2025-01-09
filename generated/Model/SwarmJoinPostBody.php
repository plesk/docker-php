<?php

namespace Docker\API\Model;

class SwarmJoinPostBody
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
     * Listen address used for inter-manager communication if the node gets promoted to manager, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP).
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
     * Addresses of manager nodes already participating in the swarm.
     *
     * @var string|null
     */
    protected $remoteAddrs;
    /**
     * Secret token for joining this swarm.
     *
     * @var string|null
     */
    protected $joinToken;
    /**
     * Listen address used for inter-manager communication if the node gets promoted to manager, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP).
     *
     * @return string|null
     */
    public function getListenAddr(): ?string
    {
        return $this->listenAddr;
    }
    /**
     * Listen address used for inter-manager communication if the node gets promoted to manager, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP).
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
     * Addresses of manager nodes already participating in the swarm.
     *
     * @return string|null
     */
    public function getRemoteAddrs(): ?string
    {
        return $this->remoteAddrs;
    }
    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @param string|null $remoteAddrs
     *
     * @return self
     */
    public function setRemoteAddrs(?string $remoteAddrs): self
    {
        $this->initialized['remoteAddrs'] = true;
        $this->remoteAddrs = $remoteAddrs;
        return $this;
    }
    /**
     * Secret token for joining this swarm.
     *
     * @return string|null
     */
    public function getJoinToken(): ?string
    {
        return $this->joinToken;
    }
    /**
     * Secret token for joining this swarm.
     *
     * @param string|null $joinToken
     *
     * @return self
     */
    public function setJoinToken(?string $joinToken): self
    {
        $this->initialized['joinToken'] = true;
        $this->joinToken = $joinToken;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class HostConfigPortBindingsItem
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
     * The host IP address
     *
     * @var string|null
     */
    protected $hostIp;
    /**
     * The host port number, as a string
     *
     * @var string|null
     */
    protected $hostPort;
    /**
     * The host IP address
     *
     * @return string|null
     */
    public function getHostIp(): ?string
    {
        return $this->hostIp;
    }
    /**
     * The host IP address
     *
     * @param string|null $hostIp
     *
     * @return self
     */
    public function setHostIp(?string $hostIp): self
    {
        $this->initialized['hostIp'] = true;
        $this->hostIp = $hostIp;
        return $this;
    }
    /**
     * The host port number, as a string
     *
     * @return string|null
     */
    public function getHostPort(): ?string
    {
        return $this->hostPort;
    }
    /**
     * The host port number, as a string
     *
     * @param string|null $hostPort
     *
     * @return self
     */
    public function setHostPort(?string $hostPort): self
    {
        $this->initialized['hostPort'] = true;
        $this->hostPort = $hostPort;
        return $this;
    }
}
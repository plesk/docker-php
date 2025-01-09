<?php

namespace Docker\API\Model;

class NetworkConfig
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
     * @var string|null
     */
    protected $bridge;
    /**
     * 
     *
     * @var string|null
     */
    protected $gateway;
    /**
     * 
     *
     * @var string|null
     */
    protected $address;
    /**
     * 
     *
     * @var int|null
     */
    protected $iPPrefixLen;
    /**
     * 
     *
     * @var string|null
     */
    protected $macAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $portMapping;
    /**
     * 
     *
     * @var list<Port>|null
     */
    protected $ports;
    /**
     * 
     *
     * @return string|null
     */
    public function getBridge(): ?string
    {
        return $this->bridge;
    }
    /**
     * 
     *
     * @param string|null $bridge
     *
     * @return self
     */
    public function setBridge(?string $bridge): self
    {
        $this->initialized['bridge'] = true;
        $this->bridge = $bridge;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * 
     *
     * @param string|null $gateway
     *
     * @return self
     */
    public function setGateway(?string $gateway): self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIPPrefixLen(): ?int
    {
        return $this->iPPrefixLen;
    }
    /**
     * 
     *
     * @param int|null $iPPrefixLen
     *
     * @return self
     */
    public function setIPPrefixLen(?int $iPPrefixLen): self
    {
        $this->initialized['iPPrefixLen'] = true;
        $this->iPPrefixLen = $iPPrefixLen;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }
    /**
     * 
     *
     * @param string|null $macAddress
     *
     * @return self
     */
    public function setMacAddress(?string $macAddress): self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPortMapping(): ?string
    {
        return $this->portMapping;
    }
    /**
     * 
     *
     * @param string|null $portMapping
     *
     * @return self
     */
    public function setPortMapping(?string $portMapping): self
    {
        $this->initialized['portMapping'] = true;
        $this->portMapping = $portMapping;
        return $this;
    }
    /**
     * 
     *
     * @return list<Port>|null
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }
    /**
     * 
     *
     * @param list<Port>|null $ports
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
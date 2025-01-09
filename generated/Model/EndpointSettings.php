<?php

namespace Docker\API\Model;

class EndpointSettings
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
     * IPAM configurations for the endpoint
     *
     * @var EndpointSettingsIPAMConfig|null
     */
    protected $iPAMConfig;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $links;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $aliases;
    /**
     * 
     *
     * @var string|null
     */
    protected $networkID;
    /**
     * 
     *
     * @var string|null
     */
    protected $endpointID;
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
    protected $iPAddress;
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
    protected $iPv6Gateway;
    /**
     * 
     *
     * @var string|null
     */
    protected $globalIPv6Address;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalIPv6PrefixLen;
    /**
     * 
     *
     * @var string|null
     */
    protected $macAddress;
    /**
     * IPAM configurations for the endpoint
     *
     * @return EndpointSettingsIPAMConfig|null
     */
    public function getIPAMConfig(): ?EndpointSettingsIPAMConfig
    {
        return $this->iPAMConfig;
    }
    /**
     * IPAM configurations for the endpoint
     *
     * @param EndpointSettingsIPAMConfig|null $iPAMConfig
     *
     * @return self
     */
    public function setIPAMConfig(?EndpointSettingsIPAMConfig $iPAMConfig): self
    {
        $this->initialized['iPAMConfig'] = true;
        $this->iPAMConfig = $iPAMConfig;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param list<string>|null $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getAliases(): ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param list<string>|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases): self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetworkID(): ?string
    {
        return $this->networkID;
    }
    /**
     * 
     *
     * @param string|null $networkID
     *
     * @return self
     */
    public function setNetworkID(?string $networkID): self
    {
        $this->initialized['networkID'] = true;
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEndpointID(): ?string
    {
        return $this->endpointID;
    }
    /**
     * 
     *
     * @param string|null $endpointID
     *
     * @return self
     */
    public function setEndpointID(?string $endpointID): self
    {
        $this->initialized['endpointID'] = true;
        $this->endpointID = $endpointID;
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
    public function getIPAddress(): ?string
    {
        return $this->iPAddress;
    }
    /**
     * 
     *
     * @param string|null $iPAddress
     *
     * @return self
     */
    public function setIPAddress(?string $iPAddress): self
    {
        $this->initialized['iPAddress'] = true;
        $this->iPAddress = $iPAddress;
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
    public function getIPv6Gateway(): ?string
    {
        return $this->iPv6Gateway;
    }
    /**
     * 
     *
     * @param string|null $iPv6Gateway
     *
     * @return self
     */
    public function setIPv6Gateway(?string $iPv6Gateway): self
    {
        $this->initialized['iPv6Gateway'] = true;
        $this->iPv6Gateway = $iPv6Gateway;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGlobalIPv6Address(): ?string
    {
        return $this->globalIPv6Address;
    }
    /**
     * 
     *
     * @param string|null $globalIPv6Address
     *
     * @return self
     */
    public function setGlobalIPv6Address(?string $globalIPv6Address): self
    {
        $this->initialized['globalIPv6Address'] = true;
        $this->globalIPv6Address = $globalIPv6Address;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalIPv6PrefixLen(): ?int
    {
        return $this->globalIPv6PrefixLen;
    }
    /**
     * 
     *
     * @param int|null $globalIPv6PrefixLen
     *
     * @return self
     */
    public function setGlobalIPv6PrefixLen(?int $globalIPv6PrefixLen): self
    {
        $this->initialized['globalIPv6PrefixLen'] = true;
        $this->globalIPv6PrefixLen = $globalIPv6PrefixLen;
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
}
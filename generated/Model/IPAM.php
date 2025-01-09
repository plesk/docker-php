<?php

namespace Docker\API\Model;

class IPAM
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
     * Name of the IPAM driver to use.
     *
     * @var string|null
     */
    protected $driver = 'default';
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @var list<array<string, string>>|null
     */
    protected $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var list<array<string, string>>|null
     */
    protected $options;
    /**
     * Name of the IPAM driver to use.
     *
     * @return string|null
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }
    /**
     * Name of the IPAM driver to use.
     *
     * @param string|null $driver
     *
     * @return self
     */
    public function setDriver(?string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @return list<array<string, string>>|null
     */
    public function getConfig(): ?array
    {
        return $this->config;
    }
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @param list<array<string, string>>|null $config
     *
     * @return self
     */
    public function setConfig(?array $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Driver-specific options, specified as a map.
     *
     * @return list<array<string, string>>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * Driver-specific options, specified as a map.
     *
     * @param list<array<string, string>>|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}
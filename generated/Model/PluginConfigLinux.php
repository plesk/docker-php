<?php

namespace Docker\API\Model;

class PluginConfigLinux
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
     * @var list<string>|null
     */
    protected $capabilities;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowAllDevices;
    /**
     * 
     *
     * @var list<PluginDevice>|null
     */
    protected $devices;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCapabilities(): ?array
    {
        return $this->capabilities;
    }
    /**
     * 
     *
     * @param list<string>|null $capabilities
     *
     * @return self
     */
    public function setCapabilities(?array $capabilities): self
    {
        $this->initialized['capabilities'] = true;
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowAllDevices(): ?bool
    {
        return $this->allowAllDevices;
    }
    /**
     * 
     *
     * @param bool|null $allowAllDevices
     *
     * @return self
     */
    public function setAllowAllDevices(?bool $allowAllDevices): self
    {
        $this->initialized['allowAllDevices'] = true;
        $this->allowAllDevices = $allowAllDevices;
        return $this;
    }
    /**
     * 
     *
     * @return list<PluginDevice>|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }
    /**
     * 
     *
     * @param list<PluginDevice>|null $devices
     *
     * @return self
     */
    public function setDevices(?array $devices): self
    {
        $this->initialized['devices'] = true;
        $this->devices = $devices;
        return $this;
    }
}
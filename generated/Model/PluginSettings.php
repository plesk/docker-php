<?php

namespace Docker\API\Model;

class PluginSettings
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
     * @var list<PluginMount>|null
     */
    protected $mounts;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $env;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $args;
    /**
     * 
     *
     * @var list<PluginDevice>|null
     */
    protected $devices;
    /**
     * 
     *
     * @return list<PluginMount>|null
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param list<PluginMount>|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts): self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getEnv(): ?array
    {
        return $this->env;
    }
    /**
     * 
     *
     * @param list<string>|null $env
     *
     * @return self
     */
    public function setEnv(?array $env): self
    {
        $this->initialized['env'] = true;
        $this->env = $env;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param list<string>|null $args
     *
     * @return self
     */
    public function setArgs(?array $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
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
<?php

namespace Docker\API\Model;

class PluginInterfaceType
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
    protected $prefix;
    /**
     * 
     *
     * @var string|null
     */
    protected $capability;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * 
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCapability(): ?string
    {
        return $this->capability;
    }
    /**
     * 
     *
     * @param string|null $capability
     *
     * @return self
     */
    public function setCapability(?string $capability): self
    {
        $this->initialized['capability'] = true;
        $this->capability = $capability;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}
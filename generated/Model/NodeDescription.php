<?php

namespace Docker\API\Model;

class NodeDescription
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
    protected $hostname;
    /**
     * 
     *
     * @var NodeDescriptionPlatform|null
     */
    protected $platform;
    /**
     * 
     *
     * @var NodeDescriptionResources|null
     */
    protected $resources;
    /**
     * 
     *
     * @var NodeDescriptionEngine|null
     */
    protected $engine;
    /**
     * 
     *
     * @return string|null
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return NodeDescriptionPlatform|null
     */
    public function getPlatform(): ?NodeDescriptionPlatform
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param NodeDescriptionPlatform|null $platform
     *
     * @return self
     */
    public function setPlatform(?NodeDescriptionPlatform $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform = $platform;
        return $this;
    }
    /**
     * 
     *
     * @return NodeDescriptionResources|null
     */
    public function getResources(): ?NodeDescriptionResources
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param NodeDescriptionResources|null $resources
     *
     * @return self
     */
    public function setResources(?NodeDescriptionResources $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return NodeDescriptionEngine|null
     */
    public function getEngine(): ?NodeDescriptionEngine
    {
        return $this->engine;
    }
    /**
     * 
     *
     * @param NodeDescriptionEngine|null $engine
     *
     * @return self
     */
    public function setEngine(?NodeDescriptionEngine $engine): self
    {
        $this->initialized['engine'] = true;
        $this->engine = $engine;
        return $this;
    }
}
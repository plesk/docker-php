<?php

namespace Docker\API\Model;

class InfoGetResponse200Plugins
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
    protected $volume;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $network;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getVolume(): ?array
    {
        return $this->volume;
    }
    /**
     * 
     *
     * @param list<string>|null $volume
     *
     * @return self
     */
    public function setVolume(?array $volume): self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getNetwork(): ?array
    {
        return $this->network;
    }
    /**
     * 
     *
     * @param list<string>|null $network
     *
     * @return self
     */
    public function setNetwork(?array $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;
        return $this;
    }
}
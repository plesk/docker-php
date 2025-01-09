<?php

namespace Docker\API\Model;

class PluginConfigInterface
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
     * @var list<PluginInterfaceType>|null
     */
    protected $types;
    /**
     * 
     *
     * @var string|null
     */
    protected $socket;
    /**
     * 
     *
     * @return list<PluginInterfaceType>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param list<PluginInterfaceType>|null $types
     *
     * @return self
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSocket(): ?string
    {
        return $this->socket;
    }
    /**
     * 
     *
     * @param string|null $socket
     *
     * @return self
     */
    public function setSocket(?string $socket): self
    {
        $this->initialized['socket'] = true;
        $this->socket = $socket;
        return $this;
    }
}
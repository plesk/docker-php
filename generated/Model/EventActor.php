<?php

namespace Docker\API\Model;

class EventActor
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
     * The ID of the object emitting the event
     *
     * @var string|null
     */
    protected $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @var array<string, string>|null
     */
    protected $attributes;
    /**
     * The ID of the object emitting the event
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the object emitting the event
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @return array<string, string>|null
     */
    public function getAttributes(): ?iterable
    {
        return $this->attributes;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @param array<string, string>|null $attributes
     *
     * @return self
     */
    public function setAttributes(?iterable $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}
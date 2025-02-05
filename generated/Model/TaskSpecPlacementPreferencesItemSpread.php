<?php

namespace Docker\API\Model;

class TaskSpecPlacementPreferencesItemSpread
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
     * label descriptor, such as `engine.labels.az`.
     *
     * @var string|null
     */
    protected $spreadDescriptor;
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @return string|null
     */
    public function getSpreadDescriptor(): ?string
    {
        return $this->spreadDescriptor;
    }
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @param string|null $spreadDescriptor
     *
     * @return self
     */
    public function setSpreadDescriptor(?string $spreadDescriptor): self
    {
        $this->initialized['spreadDescriptor'] = true;
        $this->spreadDescriptor = $spreadDescriptor;
        return $this;
    }
}
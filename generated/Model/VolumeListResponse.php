<?php

namespace Docker\API\Model;

class VolumeListResponse
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
     * List of volumes
     *
     * @var list<Volume>|null
     */
    protected $volumes;
    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @var list<string>|null
     */
    protected $warnings;
    /**
     * List of volumes
     *
     * @return list<Volume>|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes;
    }
    /**
     * List of volumes
     *
     * @param list<Volume>|null $volumes
     *
     * @return self
     */
    public function setVolumes(?array $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @param list<string>|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class MountVolumeOptions
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
     * Populate volume with data from the target.
     *
     * @var bool|null
     */
    protected $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * Map of driver specific options
     *
     * @var MountVolumeOptionsDriverConfig|null
     */
    protected $driverConfig;
    /**
     * Populate volume with data from the target.
     *
     * @return bool|null
     */
    public function getNoCopy(): ?bool
    {
        return $this->noCopy;
    }
    /**
     * Populate volume with data from the target.
     *
     * @param bool|null $noCopy
     *
     * @return self
     */
    public function setNoCopy(?bool $noCopy): self
    {
        $this->initialized['noCopy'] = true;
        $this->noCopy = $noCopy;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * Map of driver specific options
     *
     * @return MountVolumeOptionsDriverConfig|null
     */
    public function getDriverConfig(): ?MountVolumeOptionsDriverConfig
    {
        return $this->driverConfig;
    }
    /**
     * Map of driver specific options
     *
     * @param MountVolumeOptionsDriverConfig|null $driverConfig
     *
     * @return self
     */
    public function setDriverConfig(?MountVolumeOptionsDriverConfig $driverConfig): self
    {
        $this->initialized['driverConfig'] = true;
        $this->driverConfig = $driverConfig;
        return $this;
    }
}
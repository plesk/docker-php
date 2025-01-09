<?php

namespace Docker\API\Model;

class VolumeUsageData
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
     * The disk space used by the volume (local driver only)
     *
     * @var int|null
     */
    protected $size = -1;
    /**
     * The number of containers referencing this volume.
     *
     * @var int|null
     */
    protected $refCount = -1;
    /**
     * The disk space used by the volume (local driver only)
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * The disk space used by the volume (local driver only)
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The number of containers referencing this volume.
     *
     * @return int|null
     */
    public function getRefCount(): ?int
    {
        return $this->refCount;
    }
    /**
     * The number of containers referencing this volume.
     *
     * @param int|null $refCount
     *
     * @return self
     */
    public function setRefCount(?int $refCount): self
    {
        $this->initialized['refCount'] = true;
        $this->refCount = $refCount;
        return $this;
    }
}
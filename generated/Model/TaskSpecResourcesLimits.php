<?php

namespace Docker\API\Model;

class TaskSpecResourcesLimits
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
     * CPU limit in units of 10<sup>-9</sup> CPU shares.
     *
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * Memory limit in Bytes.
     *
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * CPU limit in units of 10<sup>-9</sup> CPU shares.
     *
     * @return int|null
     */
    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }
    /**
     * CPU limit in units of 10<sup>-9</sup> CPU shares.
     *
     * @param int|null $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->initialized['nanoCPUs'] = true;
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * Memory limit in Bytes.
     *
     * @return int|null
     */
    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }
    /**
     * Memory limit in Bytes.
     *
     * @param int|null $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->initialized['memoryBytes'] = true;
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
}
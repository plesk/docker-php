<?php

namespace Docker\API\Model;

class NodeDescriptionResources
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
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * 
     *
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * 
     *
     * @return int|null
     */
    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }
    /**
     * 
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
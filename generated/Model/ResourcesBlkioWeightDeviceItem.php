<?php

namespace Docker\API\Model;

class ResourcesBlkioWeightDeviceItem
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
    protected $path;
    /**
     * 
     *
     * @var int|null
     */
    protected $weight;
    /**
     * 
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}
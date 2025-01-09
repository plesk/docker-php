<?php

namespace Docker\API\Model;

class ImageRootFS
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
    protected $type;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $layers;
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLayers(): ?array
    {
        return $this->layers;
    }
    /**
     * 
     *
     * @param list<string>|null $layers
     *
     * @return self
     */
    public function setLayers(?array $layers): self
    {
        $this->initialized['layers'] = true;
        $this->layers = $layers;
        return $this;
    }
}
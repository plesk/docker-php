<?php

namespace Docker\API\Model;

class PluginConfigRootfs
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
    protected $diffIds;
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
    public function getDiffIds(): ?array
    {
        return $this->diffIds;
    }
    /**
     * 
     *
     * @param list<string>|null $diffIds
     *
     * @return self
     */
    public function setDiffIds(?array $diffIds): self
    {
        $this->initialized['diffIds'] = true;
        $this->diffIds = $diffIds;
        return $this;
    }
}
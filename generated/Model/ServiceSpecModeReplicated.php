<?php

namespace Docker\API\Model;

class ServiceSpecModeReplicated
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
    protected $replicas;
    /**
     * 
     *
     * @return int|null
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }
    /**
     * 
     *
     * @param int|null $replicas
     *
     * @return self
     */
    public function setReplicas(?int $replicas): self
    {
        $this->initialized['replicas'] = true;
        $this->replicas = $replicas;
        return $this;
    }
}
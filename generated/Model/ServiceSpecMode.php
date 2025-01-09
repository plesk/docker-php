<?php

namespace Docker\API\Model;

class ServiceSpecMode
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
     * @var ServiceSpecModeReplicated|null
     */
    protected $replicated;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $global;
    /**
     * 
     *
     * @return ServiceSpecModeReplicated|null
     */
    public function getReplicated(): ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }
    /**
     * 
     *
     * @param ServiceSpecModeReplicated|null $replicated
     *
     * @return self
     */
    public function setReplicated(?ServiceSpecModeReplicated $replicated): self
    {
        $this->initialized['replicated'] = true;
        $this->replicated = $replicated;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * 
     *
     * @param mixed $global
     *
     * @return self
     */
    public function setGlobal($global): self
    {
        $this->initialized['global'] = true;
        $this->global = $global;
        return $this;
    }
}
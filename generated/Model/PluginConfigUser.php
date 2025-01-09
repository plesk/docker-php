<?php

namespace Docker\API\Model;

class PluginConfigUser
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
    protected $uID;
    /**
     * 
     *
     * @var int|null
     */
    protected $gID;
    /**
     * 
     *
     * @return int|null
     */
    public function getUID(): ?int
    {
        return $this->uID;
    }
    /**
     * 
     *
     * @param int|null $uID
     *
     * @return self
     */
    public function setUID(?int $uID): self
    {
        $this->initialized['uID'] = true;
        $this->uID = $uID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGID(): ?int
    {
        return $this->gID;
    }
    /**
     * 
     *
     * @param int|null $gID
     *
     * @return self
     */
    public function setGID(?int $gID): self
    {
        $this->initialized['gID'] = true;
        $this->gID = $gID;
        return $this;
    }
}
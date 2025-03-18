<?php

namespace Docker\API\Model;

class SwarmSpecEncryptionConfig
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
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @var bool|null
    */
    protected $autoLockManagers;
    /**
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @return bool|null
    */
    public function getAutoLockManagers(): ?bool
    {
        return $this->autoLockManagers;
    }
    /**
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @param bool|null $autoLockManagers
    *
    * @return self
    */
    public function setAutoLockManagers(?bool $autoLockManagers): self
    {
        $this->initialized['autoLockManagers'] = true;
        $this->autoLockManagers = $autoLockManagers;
        return $this;
    }
}
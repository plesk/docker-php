<?php

namespace Docker\API\Model;

class ClusterVolumeSpecAccessModeCapacityRange
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
    * The volume must be at least this big. The value of 0
    indicates an unspecified minimum
    
    *
    * @var int|null
    */
    protected $requiredBytes;
    /**
    * The volume must not be bigger than this. The value of 0
    indicates an unspecified maximum.
    
    *
    * @var int|null
    */
    protected $limitBytes;
    /**
    * The volume must be at least this big. The value of 0
    indicates an unspecified minimum
    
    *
    * @return int|null
    */
    public function getRequiredBytes(): ?int
    {
        return $this->requiredBytes;
    }
    /**
    * The volume must be at least this big. The value of 0
    indicates an unspecified minimum
    
    *
    * @param int|null $requiredBytes
    *
    * @return self
    */
    public function setRequiredBytes(?int $requiredBytes): self
    {
        $this->initialized['requiredBytes'] = true;
        $this->requiredBytes = $requiredBytes;
        return $this;
    }
    /**
    * The volume must not be bigger than this. The value of 0
    indicates an unspecified maximum.
    
    *
    * @return int|null
    */
    public function getLimitBytes(): ?int
    {
        return $this->limitBytes;
    }
    /**
    * The volume must not be bigger than this. The value of 0
    indicates an unspecified maximum.
    
    *
    * @param int|null $limitBytes
    *
    * @return self
    */
    public function setLimitBytes(?int $limitBytes): self
    {
        $this->initialized['limitBytes'] = true;
        $this->limitBytes = $limitBytes;
        return $this;
    }
}
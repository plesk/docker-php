<?php

namespace Docker\API\Model;

class BuildPrunePostResponse200
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
     * @var list<string>|null
     */
    protected $cachesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int|null
     */
    protected $spaceReclaimed;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCachesDeleted(): ?array
    {
        return $this->cachesDeleted;
    }
    /**
     * 
     *
     * @param list<string>|null $cachesDeleted
     *
     * @return self
     */
    public function setCachesDeleted(?array $cachesDeleted): self
    {
        $this->initialized['cachesDeleted'] = true;
        $this->cachesDeleted = $cachesDeleted;
        return $this;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @return int|null
     */
    public function getSpaceReclaimed(): ?int
    {
        return $this->spaceReclaimed;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @param int|null $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed(?int $spaceReclaimed): self
    {
        $this->initialized['spaceReclaimed'] = true;
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class NetworksPrunePostResponse200
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
     * Networks that were deleted
     *
     * @var list<string>|null
     */
    protected $volumesDeleted;
    /**
     * Networks that were deleted
     *
     * @return list<string>|null
     */
    public function getVolumesDeleted(): ?array
    {
        return $this->volumesDeleted;
    }
    /**
     * Networks that were deleted
     *
     * @param list<string>|null $volumesDeleted
     *
     * @return self
     */
    public function setVolumesDeleted(?array $volumesDeleted): self
    {
        $this->initialized['volumesDeleted'] = true;
        $this->volumesDeleted = $volumesDeleted;
        return $this;
    }
}
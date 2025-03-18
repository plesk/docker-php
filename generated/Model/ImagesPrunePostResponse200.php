<?php

namespace Docker\API\Model;

class ImagesPrunePostResponse200
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
     * Images that were deleted
     *
     * @var list<ImageDeleteResponseItem>|null
     */
    protected $imagesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int|null
     */
    protected $spaceReclaimed;
    /**
     * Images that were deleted
     *
     * @return list<ImageDeleteResponseItem>|null
     */
    public function getImagesDeleted(): ?array
    {
        return $this->imagesDeleted;
    }
    /**
     * Images that were deleted
     *
     * @param list<ImageDeleteResponseItem>|null $imagesDeleted
     *
     * @return self
     */
    public function setImagesDeleted(?array $imagesDeleted): self
    {
        $this->initialized['imagesDeleted'] = true;
        $this->imagesDeleted = $imagesDeleted;
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
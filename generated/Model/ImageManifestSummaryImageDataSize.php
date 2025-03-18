<?php

namespace Docker\API\Model;

class ImageManifestSummaryImageDataSize
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
    * Unpacked is the size (in bytes) of the locally unpacked
    (uncompressed) image content that's directly usable by the containers
    running this image.
    It's independent of the distributable content - e.g.
    the image might still have an unpacked data that's still used by
    some container even when the distributable/compressed content is
    already gone.
    
    *
    * @var int|null
    */
    protected $unpacked;
    /**
    * Unpacked is the size (in bytes) of the locally unpacked
    (uncompressed) image content that's directly usable by the containers
    running this image.
    It's independent of the distributable content - e.g.
    the image might still have an unpacked data that's still used by
    some container even when the distributable/compressed content is
    already gone.
    
    *
    * @return int|null
    */
    public function getUnpacked(): ?int
    {
        return $this->unpacked;
    }
    /**
    * Unpacked is the size (in bytes) of the locally unpacked
    (uncompressed) image content that's directly usable by the containers
    running this image.
    It's independent of the distributable content - e.g.
    the image might still have an unpacked data that's still used by
    some container even when the distributable/compressed content is
    already gone.
    
    *
    * @param int|null $unpacked
    *
    * @return self
    */
    public function setUnpacked(?int $unpacked): self
    {
        $this->initialized['unpacked'] = true;
        $this->unpacked = $unpacked;
        return $this;
    }
}
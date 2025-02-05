<?php

namespace Docker\API\Model;

class ImageManifestSummarySize
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
    * Total is the total size (in bytes) of all the locally present
    data (both distributable and non-distributable) that's related to
    this manifest and its children.
    This equal to the sum of [Content] size AND all the sizes in the
    [Size] struct present in the Kind-specific data struct.
    For example, for an image kind (Kind == "image")
    this would include the size of the image content and unpacked
    image snapshots ([Size.Content] + [ImageData.Size.Unpacked]).
    
    *
    * @var int|null
    */
    protected $total;
    /**
    * Content is the size (in bytes) of all the locally present
    content in the content store (e.g. image config, layers)
    referenced by this manifest and its children.
    This only includes blobs in the content store.
    
    *
    * @var int|null
    */
    protected $content;
    /**
    * Total is the total size (in bytes) of all the locally present
    data (both distributable and non-distributable) that's related to
    this manifest and its children.
    This equal to the sum of [Content] size AND all the sizes in the
    [Size] struct present in the Kind-specific data struct.
    For example, for an image kind (Kind == "image")
    this would include the size of the image content and unpacked
    image snapshots ([Size.Content] + [ImageData.Size.Unpacked]).
    
    *
    * @return int|null
    */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
    * Total is the total size (in bytes) of all the locally present
    data (both distributable and non-distributable) that's related to
    this manifest and its children.
    This equal to the sum of [Content] size AND all the sizes in the
    [Size] struct present in the Kind-specific data struct.
    For example, for an image kind (Kind == "image")
    this would include the size of the image content and unpacked
    image snapshots ([Size.Content] + [ImageData.Size.Unpacked]).
    
    *
    * @param int|null $total
    *
    * @return self
    */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
    * Content is the size (in bytes) of all the locally present
    content in the content store (e.g. image config, layers)
    referenced by this manifest and its children.
    This only includes blobs in the content store.
    
    *
    * @return int|null
    */
    public function getContent(): ?int
    {
        return $this->content;
    }
    /**
    * Content is the size (in bytes) of all the locally present
    content in the content store (e.g. image config, layers)
    referenced by this manifest and its children.
    This only includes blobs in the content store.
    
    *
    * @param int|null $content
    *
    * @return self
    */
    public function setContent(?int $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}
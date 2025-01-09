<?php

namespace Docker\API\Model;

class ImageInspect
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
    * ID is the content-addressable ID of an image.
    
    This identifier is a content-addressable digest calculated from the
    image's configuration (which includes the digests of layers used by
    the image).
    
    Note that this digest differs from the `RepoDigests` below, which
    holds digests of image manifests that reference the image.
    
    *
    * @var string|null
    */
    protected $id;
    /**
    * List of image names/tags in the local image cache that reference this
    image.
    
    Multiple image tags can refer to the same image, and this list may be
    empty if no tags reference the image, in which case the image is
    "untagged", in which case it can still be referenced by its ID.
    
    *
    * @var list<string>|null
    */
    protected $repoTags;
    /**
    * List of content-addressable digests of locally available image manifests
    that the image is referenced from. Multiple manifests can refer to the
    same image.
    
    These digests are usually only available if the image was either pulled
    from a registry, or if the image was pushed to a registry, which is when
    the manifest is generated and its digest calculated.
    
    *
    * @var list<string>|null
    */
    protected $repoDigests;
    /**
    * ID of the parent image.
    
    Depending on how the image was created, this field may be empty and
    is only set for images that were built/created locally. This field
    is empty if the image was pulled from an image registry.
    
    *
    * @var string|null
    */
    protected $parent;
    /**
     * Optional message that was set when committing or importing the image.
     *
     * @var string|null
     */
    protected $comment;
    /**
    * Date and time at which the image was created, formatted in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    This information is only available if present in the image,
    and omitted otherwise.
    
    *
    * @var string|null
    */
    protected $created;
    /**
    * The version of Docker that was used to build the image.
    
    Depending on how the image was created, this field may be empty.
    
    *
    * @var string|null
    */
    protected $dockerVersion;
    /**
    * Name of the author that was specified when committing the image, or as
    specified through MAINTAINER (deprecated) in the Dockerfile.
    
    *
    * @var string|null
    */
    protected $author;
    /**
    * Configuration of the image. These fields are used as defaults
    when starting a container from the image.
    
    *
    * @var ImageConfig|null
    */
    protected $config;
    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @var string|null
     */
    protected $variant;
    /**
     * Operating System the image is built to run on.
     *
     * @var string|null
     */
    protected $os;
    /**
    * Operating System version the image is built to run on (especially
    for Windows).
    
    *
    * @var string|null
    */
    protected $osVersion;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @var int|null
     */
    protected $size;
    /**
    * Total size of the image including all layers it is composed of.
    
    Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
    
    *
    * @var int|null
    */
    protected $virtualSize;
    /**
    * Information about the storage driver used to store the container's and
    image's filesystem.
    
    *
    * @var DriverData|null
    */
    protected $graphDriver;
    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @var ImageInspectRootFS|null
     */
    protected $rootFS;
    /**
    * Additional metadata of the image in the local cache. This information
    is local to the daemon, and not part of the image itself.
    
    *
    * @var ImageInspectMetadata|null
    */
    protected $metadata;
    /**
    * ID is the content-addressable ID of an image.
    
    This identifier is a content-addressable digest calculated from the
    image's configuration (which includes the digests of layers used by
    the image).
    
    Note that this digest differs from the `RepoDigests` below, which
    holds digests of image manifests that reference the image.
    
    *
    * @return string|null
    */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
    * ID is the content-addressable ID of an image.
    
    This identifier is a content-addressable digest calculated from the
    image's configuration (which includes the digests of layers used by
    the image).
    
    Note that this digest differs from the `RepoDigests` below, which
    holds digests of image manifests that reference the image.
    
    *
    * @param string|null $id
    *
    * @return self
    */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * List of image names/tags in the local image cache that reference this
    image.
    
    Multiple image tags can refer to the same image, and this list may be
    empty if no tags reference the image, in which case the image is
    "untagged", in which case it can still be referenced by its ID.
    
    *
    * @return list<string>|null
    */
    public function getRepoTags(): ?array
    {
        return $this->repoTags;
    }
    /**
    * List of image names/tags in the local image cache that reference this
    image.
    
    Multiple image tags can refer to the same image, and this list may be
    empty if no tags reference the image, in which case the image is
    "untagged", in which case it can still be referenced by its ID.
    
    *
    * @param list<string>|null $repoTags
    *
    * @return self
    */
    public function setRepoTags(?array $repoTags): self
    {
        $this->initialized['repoTags'] = true;
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
    * List of content-addressable digests of locally available image manifests
    that the image is referenced from. Multiple manifests can refer to the
    same image.
    
    These digests are usually only available if the image was either pulled
    from a registry, or if the image was pushed to a registry, which is when
    the manifest is generated and its digest calculated.
    
    *
    * @return list<string>|null
    */
    public function getRepoDigests(): ?array
    {
        return $this->repoDigests;
    }
    /**
    * List of content-addressable digests of locally available image manifests
    that the image is referenced from. Multiple manifests can refer to the
    same image.
    
    These digests are usually only available if the image was either pulled
    from a registry, or if the image was pushed to a registry, which is when
    the manifest is generated and its digest calculated.
    
    *
    * @param list<string>|null $repoDigests
    *
    * @return self
    */
    public function setRepoDigests(?array $repoDigests): self
    {
        $this->initialized['repoDigests'] = true;
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
    * ID of the parent image.
    
    Depending on how the image was created, this field may be empty and
    is only set for images that were built/created locally. This field
    is empty if the image was pulled from an image registry.
    
    *
    * @return string|null
    */
    public function getParent(): ?string
    {
        return $this->parent;
    }
    /**
    * ID of the parent image.
    
    Depending on how the image was created, this field may be empty and
    is only set for images that were built/created locally. This field
    is empty if the image was pulled from an image registry.
    
    *
    * @param string|null $parent
    *
    * @return self
    */
    public function setParent(?string $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * Optional message that was set when committing or importing the image.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Optional message that was set when committing or importing the image.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
    * Date and time at which the image was created, formatted in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    This information is only available if present in the image,
    and omitted otherwise.
    
    *
    * @return string|null
    */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
    * Date and time at which the image was created, formatted in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    This information is only available if present in the image,
    and omitted otherwise.
    
    *
    * @param string|null $created
    *
    * @return self
    */
    public function setCreated(?string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
    * The version of Docker that was used to build the image.
    
    Depending on how the image was created, this field may be empty.
    
    *
    * @return string|null
    */
    public function getDockerVersion(): ?string
    {
        return $this->dockerVersion;
    }
    /**
    * The version of Docker that was used to build the image.
    
    Depending on how the image was created, this field may be empty.
    
    *
    * @param string|null $dockerVersion
    *
    * @return self
    */
    public function setDockerVersion(?string $dockerVersion): self
    {
        $this->initialized['dockerVersion'] = true;
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
    * Name of the author that was specified when committing the image, or as
    specified through MAINTAINER (deprecated) in the Dockerfile.
    
    *
    * @return string|null
    */
    public function getAuthor(): ?string
    {
        return $this->author;
    }
    /**
    * Name of the author that was specified when committing the image, or as
    specified through MAINTAINER (deprecated) in the Dockerfile.
    
    *
    * @param string|null $author
    *
    * @return self
    */
    public function setAuthor(?string $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
    * Configuration of the image. These fields are used as defaults
    when starting a container from the image.
    
    *
    * @return ImageConfig|null
    */
    public function getConfig(): ?ImageConfig
    {
        return $this->config;
    }
    /**
    * Configuration of the image. These fields are used as defaults
    when starting a container from the image.
    
    *
    * @param ImageConfig|null $config
    *
    * @return self
    */
    public function setConfig(?ImageConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @return string|null
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }
    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @param string|null $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture): self
    {
        $this->initialized['architecture'] = true;
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }
    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @param string|null $variant
     *
     * @return self
     */
    public function setVariant(?string $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
    /**
     * Operating System the image is built to run on.
     *
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os;
    }
    /**
     * Operating System the image is built to run on.
     *
     * @param string|null $os
     *
     * @return self
     */
    public function setOs(?string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
    * Operating System version the image is built to run on (especially
    for Windows).
    
    *
    * @return string|null
    */
    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }
    /**
    * Operating System version the image is built to run on (especially
    for Windows).
    
    *
    * @param string|null $osVersion
    *
    * @return self
    */
    public function setOsVersion(?string $osVersion): self
    {
        $this->initialized['osVersion'] = true;
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
    * Total size of the image including all layers it is composed of.
    
    Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
    
    *
    * @return int|null
    */
    public function getVirtualSize(): ?int
    {
        return $this->virtualSize;
    }
    /**
    * Total size of the image including all layers it is composed of.
    
    Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
    
    *
    * @param int|null $virtualSize
    *
    * @return self
    */
    public function setVirtualSize(?int $virtualSize): self
    {
        $this->initialized['virtualSize'] = true;
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
    * Information about the storage driver used to store the container's and
    image's filesystem.
    
    *
    * @return DriverData|null
    */
    public function getGraphDriver(): ?DriverData
    {
        return $this->graphDriver;
    }
    /**
    * Information about the storage driver used to store the container's and
    image's filesystem.
    
    *
    * @param DriverData|null $graphDriver
    *
    * @return self
    */
    public function setGraphDriver(?DriverData $graphDriver): self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @return ImageInspectRootFS|null
     */
    public function getRootFS(): ?ImageInspectRootFS
    {
        return $this->rootFS;
    }
    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @param ImageInspectRootFS|null $rootFS
     *
     * @return self
     */
    public function setRootFS(?ImageInspectRootFS $rootFS): self
    {
        $this->initialized['rootFS'] = true;
        $this->rootFS = $rootFS;
        return $this;
    }
    /**
    * Additional metadata of the image in the local cache. This information
    is local to the daemon, and not part of the image itself.
    
    *
    * @return ImageInspectMetadata|null
    */
    public function getMetadata(): ?ImageInspectMetadata
    {
        return $this->metadata;
    }
    /**
    * Additional metadata of the image in the local cache. This information
    is local to the daemon, and not part of the image itself.
    
    *
    * @param ImageInspectMetadata|null $metadata
    *
    * @return self
    */
    public function setMetadata(?ImageInspectMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class ImageManifestSummary
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
    * ID is the content-addressable ID of an image and is the same as the
    digest of the image manifest.
    
    *
    * @var string|null
    */
    protected $iD;
    /**
    * A descriptor struct containing digest, media type, and size, as defined in
    the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
    
    *
    * @var OCIDescriptor|null
    */
    protected $descriptor;
    /**
     * Indicates whether all the child content (image config, layers) is fully available locally.
     *
     * @var bool|null
     */
    protected $available;
    /**
     * 
     *
     * @var ImageManifestSummarySize|null
     */
    protected $size;
    /**
    * The kind of the manifest.
    
    kind         | description
    -------------|-----------------------------------------------------------
    image        | Image manifest that can be used to start a container.
    attestation  | Attestation manifest produced by the Buildkit builder for a specific image manifest.
    
    *
    * @var string|null
    */
    protected $kind;
    /**
    * The image data for the image manifest.
    This field is only populated when Kind is "image".
    
    *
    * @var ImageManifestSummaryImageData|null
    */
    protected $imageData;
    /**
    * The image data for the attestation manifest.
    This field is only populated when Kind is "attestation".
    
    *
    * @var ImageManifestSummaryAttestationData|null
    */
    protected $attestationData;
    /**
    * ID is the content-addressable ID of an image and is the same as the
    digest of the image manifest.
    
    *
    * @return string|null
    */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
    * ID is the content-addressable ID of an image and is the same as the
    digest of the image manifest.
    
    *
    * @param string|null $iD
    *
    * @return self
    */
    public function setID(?string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
    * A descriptor struct containing digest, media type, and size, as defined in
    the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
    
    *
    * @return OCIDescriptor|null
    */
    public function getDescriptor(): ?OCIDescriptor
    {
        return $this->descriptor;
    }
    /**
    * A descriptor struct containing digest, media type, and size, as defined in
    the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
    
    *
    * @param OCIDescriptor|null $descriptor
    *
    * @return self
    */
    public function setDescriptor(?OCIDescriptor $descriptor): self
    {
        $this->initialized['descriptor'] = true;
        $this->descriptor = $descriptor;
        return $this;
    }
    /**
     * Indicates whether all the child content (image config, layers) is fully available locally.
     *
     * @return bool|null
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }
    /**
     * Indicates whether all the child content (image config, layers) is fully available locally.
     *
     * @param bool|null $available
     *
     * @return self
     */
    public function setAvailable(?bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * 
     *
     * @return ImageManifestSummarySize|null
     */
    public function getSize(): ?ImageManifestSummarySize
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param ImageManifestSummarySize|null $size
     *
     * @return self
     */
    public function setSize(?ImageManifestSummarySize $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
    * The kind of the manifest.
    
    kind         | description
    -------------|-----------------------------------------------------------
    image        | Image manifest that can be used to start a container.
    attestation  | Attestation manifest produced by the Buildkit builder for a specific image manifest.
    
    *
    * @return string|null
    */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
    * The kind of the manifest.
    
    kind         | description
    -------------|-----------------------------------------------------------
    image        | Image manifest that can be used to start a container.
    attestation  | Attestation manifest produced by the Buildkit builder for a specific image manifest.
    
    *
    * @param string|null $kind
    *
    * @return self
    */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
    * The image data for the image manifest.
    This field is only populated when Kind is "image".
    
    *
    * @return ImageManifestSummaryImageData|null
    */
    public function getImageData(): ?ImageManifestSummaryImageData
    {
        return $this->imageData;
    }
    /**
    * The image data for the image manifest.
    This field is only populated when Kind is "image".
    
    *
    * @param ImageManifestSummaryImageData|null $imageData
    *
    * @return self
    */
    public function setImageData(?ImageManifestSummaryImageData $imageData): self
    {
        $this->initialized['imageData'] = true;
        $this->imageData = $imageData;
        return $this;
    }
    /**
    * The image data for the attestation manifest.
    This field is only populated when Kind is "attestation".
    
    *
    * @return ImageManifestSummaryAttestationData|null
    */
    public function getAttestationData(): ?ImageManifestSummaryAttestationData
    {
        return $this->attestationData;
    }
    /**
    * The image data for the attestation manifest.
    This field is only populated when Kind is "attestation".
    
    *
    * @param ImageManifestSummaryAttestationData|null $attestationData
    *
    * @return self
    */
    public function setAttestationData(?ImageManifestSummaryAttestationData $attestationData): self
    {
        $this->initialized['attestationData'] = true;
        $this->attestationData = $attestationData;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class Service
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
     * @var string|null
     */
    protected $iD;
    /**
     * 
     *
     * @var ServiceVersion|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * User modifiable configuration for a service.
     *
     * @var ServiceSpec|null
     */
    protected $spec;
    /**
     * 
     *
     * @var ServiceEndpoint|null
     */
    protected $endpoint;
    /**
     * The status of a service update.
     *
     * @var ServiceUpdateStatus|null
     */
    protected $updateStatus;
    /**
     * 
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * 
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
     * 
     *
     * @return ServiceVersion|null
     */
    public function getVersion(): ?ServiceVersion
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param ServiceVersion|null $version
     *
     * @return self
     */
    public function setVersion(?ServiceVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * User modifiable configuration for a service.
     *
     * @return ServiceSpec|null
     */
    public function getSpec(): ?ServiceSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable configuration for a service.
     *
     * @param ServiceSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?ServiceSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceEndpoint|null
     */
    public function getEndpoint(): ?ServiceEndpoint
    {
        return $this->endpoint;
    }
    /**
     * 
     *
     * @param ServiceEndpoint|null $endpoint
     *
     * @return self
     */
    public function setEndpoint(?ServiceEndpoint $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The status of a service update.
     *
     * @return ServiceUpdateStatus|null
     */
    public function getUpdateStatus(): ?ServiceUpdateStatus
    {
        return $this->updateStatus;
    }
    /**
     * The status of a service update.
     *
     * @param ServiceUpdateStatus|null $updateStatus
     *
     * @return self
     */
    public function setUpdateStatus(?ServiceUpdateStatus $updateStatus): self
    {
        $this->initialized['updateStatus'] = true;
        $this->updateStatus = $updateStatus;
        return $this;
    }
}
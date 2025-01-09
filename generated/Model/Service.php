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
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @var ObjectVersion|null
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
    * The status of the service's tasks. Provided only when requested as
    part of a ServiceList operation.
    
    *
    * @var ServiceServiceStatus|null
    */
    protected $serviceStatus;
    /**
    * The status of the service when it is in one of ReplicatedJob or
    GlobalJob modes. Absent on Replicated and Global mode services. The
    JobIteration is an ObjectVersion, but unlike the Service's version,
    does not need to be sent with an update request.
    
    *
    * @var ServiceJobStatus|null
    */
    protected $jobStatus;
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
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @return ObjectVersion|null
    */
    public function getVersion(): ?ObjectVersion
    {
        return $this->version;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @param ObjectVersion|null $version
    *
    * @return self
    */
    public function setVersion(?ObjectVersion $version): self
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
    /**
    * The status of the service's tasks. Provided only when requested as
    part of a ServiceList operation.
    
    *
    * @return ServiceServiceStatus|null
    */
    public function getServiceStatus(): ?ServiceServiceStatus
    {
        return $this->serviceStatus;
    }
    /**
    * The status of the service's tasks. Provided only when requested as
    part of a ServiceList operation.
    
    *
    * @param ServiceServiceStatus|null $serviceStatus
    *
    * @return self
    */
    public function setServiceStatus(?ServiceServiceStatus $serviceStatus): self
    {
        $this->initialized['serviceStatus'] = true;
        $this->serviceStatus = $serviceStatus;
        return $this;
    }
    /**
    * The status of the service when it is in one of ReplicatedJob or
    GlobalJob modes. Absent on Replicated and Global mode services. The
    JobIteration is an ObjectVersion, but unlike the Service's version,
    does not need to be sent with an update request.
    
    *
    * @return ServiceJobStatus|null
    */
    public function getJobStatus(): ?ServiceJobStatus
    {
        return $this->jobStatus;
    }
    /**
    * The status of the service when it is in one of ReplicatedJob or
    GlobalJob modes. Absent on Replicated and Global mode services. The
    JobIteration is an ObjectVersion, but unlike the Service's version,
    does not need to be sent with an update request.
    
    *
    * @param ServiceJobStatus|null $jobStatus
    *
    * @return self
    */
    public function setJobStatus(?ServiceJobStatus $jobStatus): self
    {
        $this->initialized['jobStatus'] = true;
        $this->jobStatus = $jobStatus;
        return $this;
    }
}
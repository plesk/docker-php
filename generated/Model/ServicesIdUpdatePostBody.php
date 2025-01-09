<?php

namespace Docker\API\Model;

class ServicesIdUpdatePostBody
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
     * Name of the service.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec|null
     */
    protected $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode|null
     */
    protected $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig|null
     */
    protected $updateConfig;
    /**
     * Array of network names or IDs to attach the service to.
     *
     * @var list<ServiceSpecNetworksItem>|null
     */
    protected $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec|null
     */
    protected $endpointSpec;
    /**
     * Name of the service.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the service.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * User modifiable task configuration.
     *
     * @return TaskSpec|null
     */
    public function getTaskTemplate(): ?TaskSpec
    {
        return $this->taskTemplate;
    }
    /**
     * User modifiable task configuration.
     *
     * @param TaskSpec|null $taskTemplate
     *
     * @return self
     */
    public function setTaskTemplate(?TaskSpec $taskTemplate): self
    {
        $this->initialized['taskTemplate'] = true;
        $this->taskTemplate = $taskTemplate;
        return $this;
    }
    /**
     * Scheduling mode for the service.
     *
     * @return ServiceSpecMode|null
     */
    public function getMode(): ?ServiceSpecMode
    {
        return $this->mode;
    }
    /**
     * Scheduling mode for the service.
     *
     * @param ServiceSpecMode|null $mode
     *
     * @return self
     */
    public function setMode(?ServiceSpecMode $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @return ServiceSpecUpdateConfig|null
     */
    public function getUpdateConfig(): ?ServiceSpecUpdateConfig
    {
        return $this->updateConfig;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @param ServiceSpecUpdateConfig|null $updateConfig
     *
     * @return self
     */
    public function setUpdateConfig(?ServiceSpecUpdateConfig $updateConfig): self
    {
        $this->initialized['updateConfig'] = true;
        $this->updateConfig = $updateConfig;
        return $this;
    }
    /**
     * Array of network names or IDs to attach the service to.
     *
     * @return list<ServiceSpecNetworksItem>|null
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }
    /**
     * Array of network names or IDs to attach the service to.
     *
     * @param list<ServiceSpecNetworksItem>|null $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @return EndpointSpec|null
     */
    public function getEndpointSpec(): ?EndpointSpec
    {
        return $this->endpointSpec;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @param EndpointSpec|null $endpointSpec
     *
     * @return self
     */
    public function setEndpointSpec(?EndpointSpec $endpointSpec): self
    {
        $this->initialized['endpointSpec'] = true;
        $this->endpointSpec = $endpointSpec;
        return $this;
    }
}
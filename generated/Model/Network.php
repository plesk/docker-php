<?php

namespace Docker\API\Model;

class Network
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
     * Name of the network.
     *
     * @var string|null
     */
    protected $name;
    /**
     * ID that uniquely identifies a network on a single machine.
     *
     * @var string|null
     */
    protected $id;
    /**
    * Date and time at which the network was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $created;
    /**
    * The level at which the network exists (e.g. `swarm` for cluster-wide
    or `local` for machine level)
    
    *
    * @var string|null
    */
    protected $scope;
    /**
    * The name of the driver used to create the network (e.g. `bridge`,
    `overlay`).
    
    *
    * @var string|null
    */
    protected $driver;
    /**
     * Whether the network was created with IPv4 enabled.
     *
     * @var bool|null
     */
    protected $enableIPv4;
    /**
     * Whether the network was created with IPv6 enabled.
     *
     * @var bool|null
     */
    protected $enableIPv6;
    /**
     * 
     *
     * @var IPAM|null
     */
    protected $iPAM;
    /**
    * Whether the network is created to only allow internal networking
    connectivity.
    
    *
    * @var bool|null
    */
    protected $internal = false;
    /**
    * Whether a global / swarm scope network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @var bool|null
    */
    protected $attachable = false;
    /**
     * Whether the network is providing the routing-mesh for the swarm cluster.
     *
     * @var bool|null
     */
    protected $ingress = false;
    /**
    * The config-only network source to provide the configuration for
    this network.
    
    *
    * @var ConfigReference|null
    */
    protected $configFrom;
    /**
    * Whether the network is a config-only network. Config-only networks are
    placeholder networks for network configurations to be used by other
    networks. Config-only networks cannot be used directly to run containers
    or services.
    
    *
    * @var bool|null
    */
    protected $configOnly = false;
    /**
     * Contains endpoints attached to the network.
     *
     * @var array<string, NetworkContainer>|null
     */
    protected $containers;
    /**
     * Network-specific options uses when creating the network.
     *
     * @var array<string, string>|null
     */
    protected $options;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
    * List of peer nodes for an overlay network. This field is only present
    for overlay networks, and omitted for other network types.
    
    *
    * @var list<PeerInfo>|null
    */
    protected $peers;
    /**
     * Name of the network.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the network.
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
     * ID that uniquely identifies a network on a single machine.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * ID that uniquely identifies a network on a single machine.
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
    * Date and time at which the network was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
    * Date and time at which the network was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
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
    * The level at which the network exists (e.g. `swarm` for cluster-wide
    or `local` for machine level)
    
    *
    * @return string|null
    */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
    * The level at which the network exists (e.g. `swarm` for cluster-wide
    or `local` for machine level)
    
    *
    * @param string|null $scope
    *
    * @return self
    */
    public function setScope(?string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
    * The name of the driver used to create the network (e.g. `bridge`,
    `overlay`).
    
    *
    * @return string|null
    */
    public function getDriver(): ?string
    {
        return $this->driver;
    }
    /**
    * The name of the driver used to create the network (e.g. `bridge`,
    `overlay`).
    
    *
    * @param string|null $driver
    *
    * @return self
    */
    public function setDriver(?string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
     * Whether the network was created with IPv4 enabled.
     *
     * @return bool|null
     */
    public function getEnableIPv4(): ?bool
    {
        return $this->enableIPv4;
    }
    /**
     * Whether the network was created with IPv4 enabled.
     *
     * @param bool|null $enableIPv4
     *
     * @return self
     */
    public function setEnableIPv4(?bool $enableIPv4): self
    {
        $this->initialized['enableIPv4'] = true;
        $this->enableIPv4 = $enableIPv4;
        return $this;
    }
    /**
     * Whether the network was created with IPv6 enabled.
     *
     * @return bool|null
     */
    public function getEnableIPv6(): ?bool
    {
        return $this->enableIPv6;
    }
    /**
     * Whether the network was created with IPv6 enabled.
     *
     * @param bool|null $enableIPv6
     *
     * @return self
     */
    public function setEnableIPv6(?bool $enableIPv6): self
    {
        $this->initialized['enableIPv6'] = true;
        $this->enableIPv6 = $enableIPv6;
        return $this;
    }
    /**
     * 
     *
     * @return IPAM|null
     */
    public function getIPAM(): ?IPAM
    {
        return $this->iPAM;
    }
    /**
     * 
     *
     * @param IPAM|null $iPAM
     *
     * @return self
     */
    public function setIPAM(?IPAM $iPAM): self
    {
        $this->initialized['iPAM'] = true;
        $this->iPAM = $iPAM;
        return $this;
    }
    /**
    * Whether the network is created to only allow internal networking
    connectivity.
    
    *
    * @return bool|null
    */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }
    /**
    * Whether the network is created to only allow internal networking
    connectivity.
    
    *
    * @param bool|null $internal
    *
    * @return self
    */
    public function setInternal(?bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
    * Whether a global / swarm scope network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @return bool|null
    */
    public function getAttachable(): ?bool
    {
        return $this->attachable;
    }
    /**
    * Whether a global / swarm scope network is manually attachable by regular
    containers from workers in swarm mode.
    
    *
    * @param bool|null $attachable
    *
    * @return self
    */
    public function setAttachable(?bool $attachable): self
    {
        $this->initialized['attachable'] = true;
        $this->attachable = $attachable;
        return $this;
    }
    /**
     * Whether the network is providing the routing-mesh for the swarm cluster.
     *
     * @return bool|null
     */
    public function getIngress(): ?bool
    {
        return $this->ingress;
    }
    /**
     * Whether the network is providing the routing-mesh for the swarm cluster.
     *
     * @param bool|null $ingress
     *
     * @return self
     */
    public function setIngress(?bool $ingress): self
    {
        $this->initialized['ingress'] = true;
        $this->ingress = $ingress;
        return $this;
    }
    /**
    * The config-only network source to provide the configuration for
    this network.
    
    *
    * @return ConfigReference|null
    */
    public function getConfigFrom(): ?ConfigReference
    {
        return $this->configFrom;
    }
    /**
    * The config-only network source to provide the configuration for
    this network.
    
    *
    * @param ConfigReference|null $configFrom
    *
    * @return self
    */
    public function setConfigFrom(?ConfigReference $configFrom): self
    {
        $this->initialized['configFrom'] = true;
        $this->configFrom = $configFrom;
        return $this;
    }
    /**
    * Whether the network is a config-only network. Config-only networks are
    placeholder networks for network configurations to be used by other
    networks. Config-only networks cannot be used directly to run containers
    or services.
    
    *
    * @return bool|null
    */
    public function getConfigOnly(): ?bool
    {
        return $this->configOnly;
    }
    /**
    * Whether the network is a config-only network. Config-only networks are
    placeholder networks for network configurations to be used by other
    networks. Config-only networks cannot be used directly to run containers
    or services.
    
    *
    * @param bool|null $configOnly
    *
    * @return self
    */
    public function setConfigOnly(?bool $configOnly): self
    {
        $this->initialized['configOnly'] = true;
        $this->configOnly = $configOnly;
        return $this;
    }
    /**
     * Contains endpoints attached to the network.
     *
     * @return array<string, NetworkContainer>|null
     */
    public function getContainers(): ?iterable
    {
        return $this->containers;
    }
    /**
     * Contains endpoints attached to the network.
     *
     * @param array<string, NetworkContainer>|null $containers
     *
     * @return self
     */
    public function setContainers(?iterable $containers): self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
    /**
     * Network-specific options uses when creating the network.
     *
     * @return array<string, string>|null
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }
    /**
     * Network-specific options uses when creating the network.
     *
     * @param array<string, string>|null $options
     *
     * @return self
     */
    public function setOptions(?iterable $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
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
    * List of peer nodes for an overlay network. This field is only present
    for overlay networks, and omitted for other network types.
    
    *
    * @return list<PeerInfo>|null
    */
    public function getPeers(): ?array
    {
        return $this->peers;
    }
    /**
    * List of peer nodes for an overlay network. This field is only present
    for overlay networks, and omitted for other network types.
    
    *
    * @param list<PeerInfo>|null $peers
    *
    * @return self
    */
    public function setPeers(?array $peers): self
    {
        $this->initialized['peers'] = true;
        $this->peers = $peers;
        return $this;
    }
}
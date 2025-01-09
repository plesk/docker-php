<?php

namespace Docker\API\Model;

class ContainersIdJsonGetResponse200
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
     * The ID of the container
     *
     * @var string|null
     */
    protected $id;
    /**
     * The time the container was created
     *
     * @var string|null
     */
    protected $created;
    /**
     * The path to the command being run
     *
     * @var string|null
     */
    protected $path;
    /**
     * The arguments to the command being run
     *
     * @var list<string>|null
     */
    protected $args;
    /**
     * The state of the container.
     *
     * @var ContainersIdJsonGetResponse200State|null
     */
    protected $state;
    /**
     * The container's image
     *
     * @var string|null
     */
    protected $image;
    /**
     * 
     *
     * @var string|null
     */
    protected $resolvConfPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostnamePath;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostsPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $logPath;
    /**
     * TODO
     *
     * @var mixed|null
     */
    protected $node;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $restartCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $driver;
    /**
     * 
     *
     * @var string|null
     */
    protected $mountLabel;
    /**
     * 
     *
     * @var string|null
     */
    protected $processLabel;
    /**
     * 
     *
     * @var string|null
     */
    protected $appArmorProfile;
    /**
     * 
     *
     * @var string|null
     */
    protected $execIDs;
    /**
     * Container configuration that depends on the host we are running on
     *
     * @var HostConfig|null
     */
    protected $hostConfig;
    /**
     * Information about this container's graph driver.
     *
     * @var GraphDriver|null
     */
    protected $graphDriver;
    /**
     * The size of files that have been created or changed by this container.
     *
     * @var int|null
     */
    protected $sizeRw;
    /**
     * The total size of all the files in this container.
     *
     * @var int|null
     */
    protected $sizeRootFs;
    /**
     * 
     *
     * @var list<MountPoint>|null
     */
    protected $mounts;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var Config|null
     */
    protected $config;
    /**
     * TODO: check is correct
     *
     * @var NetworkConfig|null
     */
    protected $networkSettings;
    /**
     * The ID of the container
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The ID of the container
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
     * The time the container was created
     *
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * The time the container was created
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
     * The path to the command being run
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * The path to the command being run
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The arguments to the command being run
     *
     * @return list<string>|null
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }
    /**
     * The arguments to the command being run
     *
     * @param list<string>|null $args
     *
     * @return self
     */
    public function setArgs(?array $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * The state of the container.
     *
     * @return ContainersIdJsonGetResponse200State|null
     */
    public function getState(): ?ContainersIdJsonGetResponse200State
    {
        return $this->state;
    }
    /**
     * The state of the container.
     *
     * @param ContainersIdJsonGetResponse200State|null $state
     *
     * @return self
     */
    public function setState(?ContainersIdJsonGetResponse200State $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The container's image
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * The container's image
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResolvConfPath(): ?string
    {
        return $this->resolvConfPath;
    }
    /**
     * 
     *
     * @param string|null $resolvConfPath
     *
     * @return self
     */
    public function setResolvConfPath(?string $resolvConfPath): self
    {
        $this->initialized['resolvConfPath'] = true;
        $this->resolvConfPath = $resolvConfPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostnamePath(): ?string
    {
        return $this->hostnamePath;
    }
    /**
     * 
     *
     * @param string|null $hostnamePath
     *
     * @return self
     */
    public function setHostnamePath(?string $hostnamePath): self
    {
        $this->initialized['hostnamePath'] = true;
        $this->hostnamePath = $hostnamePath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostsPath(): ?string
    {
        return $this->hostsPath;
    }
    /**
     * 
     *
     * @param string|null $hostsPath
     *
     * @return self
     */
    public function setHostsPath(?string $hostsPath): self
    {
        $this->initialized['hostsPath'] = true;
        $this->hostsPath = $hostsPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLogPath(): ?string
    {
        return $this->logPath;
    }
    /**
     * 
     *
     * @param string|null $logPath
     *
     * @return self
     */
    public function setLogPath(?string $logPath): self
    {
        $this->initialized['logPath'] = true;
        $this->logPath = $logPath;
        return $this;
    }
    /**
     * TODO
     *
     * @return mixed
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * TODO
     *
     * @param mixed $node
     *
     * @return self
     */
    public function setNode($node): self
    {
        $this->initialized['node'] = true;
        $this->node = $node;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getRestartCount(): ?int
    {
        return $this->restartCount;
    }
    /**
     * 
     *
     * @param int|null $restartCount
     *
     * @return self
     */
    public function setRestartCount(?int $restartCount): self
    {
        $this->initialized['restartCount'] = true;
        $this->restartCount = $restartCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getMountLabel(): ?string
    {
        return $this->mountLabel;
    }
    /**
     * 
     *
     * @param string|null $mountLabel
     *
     * @return self
     */
    public function setMountLabel(?string $mountLabel): self
    {
        $this->initialized['mountLabel'] = true;
        $this->mountLabel = $mountLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProcessLabel(): ?string
    {
        return $this->processLabel;
    }
    /**
     * 
     *
     * @param string|null $processLabel
     *
     * @return self
     */
    public function setProcessLabel(?string $processLabel): self
    {
        $this->initialized['processLabel'] = true;
        $this->processLabel = $processLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAppArmorProfile(): ?string
    {
        return $this->appArmorProfile;
    }
    /**
     * 
     *
     * @param string|null $appArmorProfile
     *
     * @return self
     */
    public function setAppArmorProfile(?string $appArmorProfile): self
    {
        $this->initialized['appArmorProfile'] = true;
        $this->appArmorProfile = $appArmorProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExecIDs(): ?string
    {
        return $this->execIDs;
    }
    /**
     * 
     *
     * @param string|null $execIDs
     *
     * @return self
     */
    public function setExecIDs(?string $execIDs): self
    {
        $this->initialized['execIDs'] = true;
        $this->execIDs = $execIDs;
        return $this;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @return HostConfig|null
     */
    public function getHostConfig(): ?HostConfig
    {
        return $this->hostConfig;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @param HostConfig|null $hostConfig
     *
     * @return self
     */
    public function setHostConfig(?HostConfig $hostConfig): self
    {
        $this->initialized['hostConfig'] = true;
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * Information about this container's graph driver.
     *
     * @return GraphDriver|null
     */
    public function getGraphDriver(): ?GraphDriver
    {
        return $this->graphDriver;
    }
    /**
     * Information about this container's graph driver.
     *
     * @param GraphDriver|null $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(?GraphDriver $graphDriver): self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * The size of files that have been created or changed by this container.
     *
     * @return int|null
     */
    public function getSizeRw(): ?int
    {
        return $this->sizeRw;
    }
    /**
     * The size of files that have been created or changed by this container.
     *
     * @param int|null $sizeRw
     *
     * @return self
     */
    public function setSizeRw(?int $sizeRw): self
    {
        $this->initialized['sizeRw'] = true;
        $this->sizeRw = $sizeRw;
        return $this;
    }
    /**
     * The total size of all the files in this container.
     *
     * @return int|null
     */
    public function getSizeRootFs(): ?int
    {
        return $this->sizeRootFs;
    }
    /**
     * The total size of all the files in this container.
     *
     * @param int|null $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs(?int $sizeRootFs): self
    {
        $this->initialized['sizeRootFs'] = true;
        $this->sizeRootFs = $sizeRootFs;
        return $this;
    }
    /**
     * 
     *
     * @return list<MountPoint>|null
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param list<MountPoint>|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts): self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return Config|null
     */
    public function getConfig(): ?Config
    {
        return $this->config;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param Config|null $config
     *
     * @return self
     */
    public function setConfig(?Config $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * TODO: check is correct
     *
     * @return NetworkConfig|null
     */
    public function getNetworkSettings(): ?NetworkConfig
    {
        return $this->networkSettings;
    }
    /**
     * TODO: check is correct
     *
     * @param NetworkConfig|null $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(?NetworkConfig $networkSettings): self
    {
        $this->initialized['networkSettings'] = true;
        $this->networkSettings = $networkSettings;
        return $this;
    }
}
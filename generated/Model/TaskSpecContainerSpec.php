<?php

namespace Docker\API\Model;

class TaskSpecContainerSpec
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
     * The image name to use for the container
     *
     * @var string|null
     */
    protected $image;
    /**
     * User-defined key/value data.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * The command to be run in the image.
     *
     * @var list<string>|null
     */
    protected $command;
    /**
     * Arguments to the command.
     *
     * @var list<string>|null
     */
    protected $args;
    /**
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @var string|null
    */
    protected $hostname;
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @var list<string>|null
     */
    protected $env;
    /**
     * The working directory for commands to run in.
     *
     * @var string|null
     */
    protected $dir;
    /**
     * The user inside the container.
     *
     * @var string|null
     */
    protected $user;
    /**
     * A list of additional groups that the container process will run as.
     *
     * @var list<string>|null
     */
    protected $groups;
    /**
     * Security options for the container
     *
     * @var TaskSpecContainerSpecPrivileges|null
     */
    protected $privileges;
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @var bool|null
     */
    protected $tTY;
    /**
     * Open `stdin`
     *
     * @var bool|null
     */
    protected $openStdin;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @var list<Mount>|null
    */
    protected $mounts;
    /**
     * Signal to stop the container.
     *
     * @var string|null
     */
    protected $stopSignal;
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @var int|null
    */
    protected $stopGracePeriod;
    /**
     * A test to perform to check that the container is healthy.
     *
     * @var HealthConfig|null
     */
    protected $healthCheck;
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @var list<string>|null
    */
    protected $hosts;
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @var TaskSpecContainerSpecDNSConfig|null
    */
    protected $dNSConfig;
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @var list<TaskSpecContainerSpecSecretsItem>|null
    */
    protected $secrets;
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @var int|null
    */
    protected $oomScoreAdj;
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @var list<TaskSpecContainerSpecConfigsItem>|null
    */
    protected $configs;
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @var string|null
    */
    protected $isolation;
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @var bool|null
    */
    protected $init;
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @var array<string, string>|null
    */
    protected $sysctls;
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @var list<string>|null
    */
    protected $capabilityAdd;
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @var list<string>|null
    */
    protected $capabilityDrop;
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @var list<TaskSpecContainerSpecUlimitsItem>|null
     */
    protected $ulimits;
    /**
     * The image name to use for the container
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * The image name to use for the container
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
     * User-defined key/value data.
     *
     * @return array<string, string>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value data.
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
     * The command to be run in the image.
     *
     * @return list<string>|null
     */
    public function getCommand(): ?array
    {
        return $this->command;
    }
    /**
     * The command to be run in the image.
     *
     * @param list<string>|null $command
     *
     * @return self
     */
    public function setCommand(?array $command): self
    {
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * Arguments to the command.
     *
     * @return list<string>|null
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }
    /**
     * Arguments to the command.
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
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @return string|null
    */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }
    /**
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @param string|null $hostname
    *
    * @return self
    */
    public function setHostname(?string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @return list<string>|null
     */
    public function getEnv(): ?array
    {
        return $this->env;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @param list<string>|null $env
     *
     * @return self
     */
    public function setEnv(?array $env): self
    {
        $this->initialized['env'] = true;
        $this->env = $env;
        return $this;
    }
    /**
     * The working directory for commands to run in.
     *
     * @return string|null
     */
    public function getDir(): ?string
    {
        return $this->dir;
    }
    /**
     * The working directory for commands to run in.
     *
     * @param string|null $dir
     *
     * @return self
     */
    public function setDir(?string $dir): self
    {
        $this->initialized['dir'] = true;
        $this->dir = $dir;
        return $this;
    }
    /**
     * The user inside the container.
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * The user inside the container.
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @return list<string>|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @param list<string>|null $groups
     *
     * @return self
     */
    public function setGroups(?array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
    /**
     * Security options for the container
     *
     * @return TaskSpecContainerSpecPrivileges|null
     */
    public function getPrivileges(): ?TaskSpecContainerSpecPrivileges
    {
        return $this->privileges;
    }
    /**
     * Security options for the container
     *
     * @param TaskSpecContainerSpecPrivileges|null $privileges
     *
     * @return self
     */
    public function setPrivileges(?TaskSpecContainerSpecPrivileges $privileges): self
    {
        $this->initialized['privileges'] = true;
        $this->privileges = $privileges;
        return $this;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @return bool|null
     */
    public function getTTY(): ?bool
    {
        return $this->tTY;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @param bool|null $tTY
     *
     * @return self
     */
    public function setTTY(?bool $tTY): self
    {
        $this->initialized['tTY'] = true;
        $this->tTY = $tTY;
        return $this;
    }
    /**
     * Open `stdin`
     *
     * @return bool|null
     */
    public function getOpenStdin(): ?bool
    {
        return $this->openStdin;
    }
    /**
     * Open `stdin`
     *
     * @param bool|null $openStdin
     *
     * @return self
     */
    public function setOpenStdin(?bool $openStdin): self
    {
        $this->initialized['openStdin'] = true;
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @return list<Mount>|null
    */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @param list<Mount>|null $mounts
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
     * Signal to stop the container.
     *
     * @return string|null
     */
    public function getStopSignal(): ?string
    {
        return $this->stopSignal;
    }
    /**
     * Signal to stop the container.
     *
     * @param string|null $stopSignal
     *
     * @return self
     */
    public function setStopSignal(?string $stopSignal): self
    {
        $this->initialized['stopSignal'] = true;
        $this->stopSignal = $stopSignal;
        return $this;
    }
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @return int|null
    */
    public function getStopGracePeriod(): ?int
    {
        return $this->stopGracePeriod;
    }
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @param int|null $stopGracePeriod
    *
    * @return self
    */
    public function setStopGracePeriod(?int $stopGracePeriod): self
    {
        $this->initialized['stopGracePeriod'] = true;
        $this->stopGracePeriod = $stopGracePeriod;
        return $this;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @return HealthConfig|null
     */
    public function getHealthCheck(): ?HealthConfig
    {
        return $this->healthCheck;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @param HealthConfig|null $healthCheck
     *
     * @return self
     */
    public function setHealthCheck(?HealthConfig $healthCheck): self
    {
        $this->initialized['healthCheck'] = true;
        $this->healthCheck = $healthCheck;
        return $this;
    }
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @return list<string>|null
    */
    public function getHosts(): ?array
    {
        return $this->hosts;
    }
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @param list<string>|null $hosts
    *
    * @return self
    */
    public function setHosts(?array $hosts): self
    {
        $this->initialized['hosts'] = true;
        $this->hosts = $hosts;
        return $this;
    }
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @return TaskSpecContainerSpecDNSConfig|null
    */
    public function getDNSConfig(): ?TaskSpecContainerSpecDNSConfig
    {
        return $this->dNSConfig;
    }
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @param TaskSpecContainerSpecDNSConfig|null $dNSConfig
    *
    * @return self
    */
    public function setDNSConfig(?TaskSpecContainerSpecDNSConfig $dNSConfig): self
    {
        $this->initialized['dNSConfig'] = true;
        $this->dNSConfig = $dNSConfig;
        return $this;
    }
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @return list<TaskSpecContainerSpecSecretsItem>|null
    */
    public function getSecrets(): ?array
    {
        return $this->secrets;
    }
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @param list<TaskSpecContainerSpecSecretsItem>|null $secrets
    *
    * @return self
    */
    public function setSecrets(?array $secrets): self
    {
        $this->initialized['secrets'] = true;
        $this->secrets = $secrets;
        return $this;
    }
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @return int|null
    */
    public function getOomScoreAdj(): ?int
    {
        return $this->oomScoreAdj;
    }
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @param int|null $oomScoreAdj
    *
    * @return self
    */
    public function setOomScoreAdj(?int $oomScoreAdj): self
    {
        $this->initialized['oomScoreAdj'] = true;
        $this->oomScoreAdj = $oomScoreAdj;
        return $this;
    }
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @return list<TaskSpecContainerSpecConfigsItem>|null
    */
    public function getConfigs(): ?array
    {
        return $this->configs;
    }
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @param list<TaskSpecContainerSpecConfigsItem>|null $configs
    *
    * @return self
    */
    public function setConfigs(?array $configs): self
    {
        $this->initialized['configs'] = true;
        $this->configs = $configs;
        return $this;
    }
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @return string|null
    */
    public function getIsolation(): ?string
    {
        return $this->isolation;
    }
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @param string|null $isolation
    *
    * @return self
    */
    public function setIsolation(?string $isolation): self
    {
        $this->initialized['isolation'] = true;
        $this->isolation = $isolation;
        return $this;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @return bool|null
    */
    public function getInit(): ?bool
    {
        return $this->init;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @param bool|null $init
    *
    * @return self
    */
    public function setInit(?bool $init): self
    {
        $this->initialized['init'] = true;
        $this->init = $init;
        return $this;
    }
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @return array<string, string>|null
    */
    public function getSysctls(): ?iterable
    {
        return $this->sysctls;
    }
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @param array<string, string>|null $sysctls
    *
    * @return self
    */
    public function setSysctls(?iterable $sysctls): self
    {
        $this->initialized['sysctls'] = true;
        $this->sysctls = $sysctls;
        return $this;
    }
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @return list<string>|null
    */
    public function getCapabilityAdd(): ?array
    {
        return $this->capabilityAdd;
    }
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @param list<string>|null $capabilityAdd
    *
    * @return self
    */
    public function setCapabilityAdd(?array $capabilityAdd): self
    {
        $this->initialized['capabilityAdd'] = true;
        $this->capabilityAdd = $capabilityAdd;
        return $this;
    }
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @return list<string>|null
    */
    public function getCapabilityDrop(): ?array
    {
        return $this->capabilityDrop;
    }
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @param list<string>|null $capabilityDrop
    *
    * @return self
    */
    public function setCapabilityDrop(?array $capabilityDrop): self
    {
        $this->initialized['capabilityDrop'] = true;
        $this->capabilityDrop = $capabilityDrop;
        return $this;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @return list<TaskSpecContainerSpecUlimitsItem>|null
     */
    public function getUlimits(): ?array
    {
        return $this->ulimits;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @param list<TaskSpecContainerSpecUlimitsItem>|null $ulimits
     *
     * @return self
     */
    public function setUlimits(?array $ulimits): self
    {
        $this->initialized['ulimits'] = true;
        $this->ulimits = $ulimits;
        return $this;
    }
}
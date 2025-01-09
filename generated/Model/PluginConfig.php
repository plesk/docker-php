<?php

namespace Docker\API\Model;

class PluginConfig
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
     * Docker Version used to create the plugin
     *
     * @var string|null
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentation;
    /**
     * The interface between Docker and the plugin
     *
     * @var PluginConfigInterface|null
     */
    protected $interface;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var string|null
     */
    protected $workDir;
    /**
     * 
     *
     * @var PluginConfigUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var PluginConfigNetwork|null
     */
    protected $network;
    /**
     * 
     *
     * @var PluginConfigLinux|null
     */
    protected $linux;
    /**
     * 
     *
     * @var string|null
     */
    protected $propagatedMount;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ipcHost;
    /**
     * 
     *
     * @var bool|null
     */
    protected $pidHost;
    /**
     * 
     *
     * @var list<PluginMount>|null
     */
    protected $mounts;
    /**
     * 
     *
     * @var list<PluginEnv>|null
     */
    protected $env;
    /**
     * 
     *
     * @var PluginConfigArgs|null
     */
    protected $args;
    /**
     * 
     *
     * @var PluginConfigRootfs|null
     */
    protected $rootfs;
    /**
     * Docker Version used to create the plugin
     *
     * @return string|null
     */
    public function getDockerVersion(): ?string
    {
        return $this->dockerVersion;
    }
    /**
     * Docker Version used to create the plugin
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
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentation(): ?string
    {
        return $this->documentation;
    }
    /**
     * 
     *
     * @param string|null $documentation
     *
     * @return self
     */
    public function setDocumentation(?string $documentation): self
    {
        $this->initialized['documentation'] = true;
        $this->documentation = $documentation;
        return $this;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @return PluginConfigInterface|null
     */
    public function getInterface(): ?PluginConfigInterface
    {
        return $this->interface;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @param PluginConfigInterface|null $interface
     *
     * @return self
     */
    public function setInterface(?PluginConfigInterface $interface): self
    {
        $this->initialized['interface'] = true;
        $this->interface = $interface;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getEntrypoint(): ?array
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param list<string>|null $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(?array $entrypoint): self
    {
        $this->initialized['entrypoint'] = true;
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWorkDir(): ?string
    {
        return $this->workDir;
    }
    /**
     * 
     *
     * @param string|null $workDir
     *
     * @return self
     */
    public function setWorkDir(?string $workDir): self
    {
        $this->initialized['workDir'] = true;
        $this->workDir = $workDir;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigUser|null
     */
    public function getUser(): ?PluginConfigUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PluginConfigUser|null $user
     *
     * @return self
     */
    public function setUser(?PluginConfigUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigNetwork|null
     */
    public function getNetwork(): ?PluginConfigNetwork
    {
        return $this->network;
    }
    /**
     * 
     *
     * @param PluginConfigNetwork|null $network
     *
     * @return self
     */
    public function setNetwork(?PluginConfigNetwork $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigLinux|null
     */
    public function getLinux(): ?PluginConfigLinux
    {
        return $this->linux;
    }
    /**
     * 
     *
     * @param PluginConfigLinux|null $linux
     *
     * @return self
     */
    public function setLinux(?PluginConfigLinux $linux): self
    {
        $this->initialized['linux'] = true;
        $this->linux = $linux;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropagatedMount(): ?string
    {
        return $this->propagatedMount;
    }
    /**
     * 
     *
     * @param string|null $propagatedMount
     *
     * @return self
     */
    public function setPropagatedMount(?string $propagatedMount): self
    {
        $this->initialized['propagatedMount'] = true;
        $this->propagatedMount = $propagatedMount;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIpcHost(): ?bool
    {
        return $this->ipcHost;
    }
    /**
     * 
     *
     * @param bool|null $ipcHost
     *
     * @return self
     */
    public function setIpcHost(?bool $ipcHost): self
    {
        $this->initialized['ipcHost'] = true;
        $this->ipcHost = $ipcHost;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPidHost(): ?bool
    {
        return $this->pidHost;
    }
    /**
     * 
     *
     * @param bool|null $pidHost
     *
     * @return self
     */
    public function setPidHost(?bool $pidHost): self
    {
        $this->initialized['pidHost'] = true;
        $this->pidHost = $pidHost;
        return $this;
    }
    /**
     * 
     *
     * @return list<PluginMount>|null
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param list<PluginMount>|null $mounts
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
     * 
     *
     * @return list<PluginEnv>|null
     */
    public function getEnv(): ?array
    {
        return $this->env;
    }
    /**
     * 
     *
     * @param list<PluginEnv>|null $env
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
     * 
     *
     * @return PluginConfigArgs|null
     */
    public function getArgs(): ?PluginConfigArgs
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param PluginConfigArgs|null $args
     *
     * @return self
     */
    public function setArgs(?PluginConfigArgs $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigRootfs|null
     */
    public function getRootfs(): ?PluginConfigRootfs
    {
        return $this->rootfs;
    }
    /**
     * 
     *
     * @param PluginConfigRootfs|null $rootfs
     *
     * @return self
     */
    public function setRootfs(?PluginConfigRootfs $rootfs): self
    {
        $this->initialized['rootfs'] = true;
        $this->rootfs = $rootfs;
        return $this;
    }
}
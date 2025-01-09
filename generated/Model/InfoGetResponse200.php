<?php

namespace Docker\API\Model;

class InfoGetResponse200
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
    protected $architecture;
    /**
     * 
     *
     * @var int|null
     */
    protected $containers;
    /**
     * 
     *
     * @var int|null
     */
    protected $containersRunning;
    /**
     * 
     *
     * @var int|null
     */
    protected $containersStopped;
    /**
     * 
     *
     * @var int|null
     */
    protected $containersPaused;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cpuCfsPeriod;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cpuCfsQuota;
    /**
     * 
     *
     * @var bool|null
     */
    protected $debug;
    /**
     * 
     *
     * @var string|null
     */
    protected $discoveryBackend;
    /**
     * 
     *
     * @var string|null
     */
    protected $dockerRootDir;
    /**
     * 
     *
     * @var string|null
     */
    protected $driver;
    /**
     * 
     *
     * @var list<list<string>>|null
     */
    protected $driverStatus;
    /**
     * 
     *
     * @var list<list<string>>|null
     */
    protected $systemStatus;
    /**
     * 
     *
     * @var InfoGetResponse200Plugins|null
     */
    protected $plugins;
    /**
     * 
     *
     * @var bool|null
     */
    protected $experimentalBuild;
    /**
     * 
     *
     * @var string|null
     */
    protected $httpProxy;
    /**
     * 
     *
     * @var string|null
     */
    protected $httpsProxy;
    /**
     * 
     *
     * @var string|null
     */
    protected $iD;
    /**
     * 
     *
     * @var bool|null
     */
    protected $iPv4Forwarding;
    /**
     * 
     *
     * @var int|null
     */
    protected $images;
    /**
     * 
     *
     * @var string|null
     */
    protected $indexServerAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $initPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $initSha1;
    /**
     * 
     *
     * @var string|null
     */
    protected $kernelVersion;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $labels;
    /**
     * 
     *
     * @var int|null
     */
    protected $memTotal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $memoryLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $nCPU;
    /**
     * 
     *
     * @var int|null
     */
    protected $nEventsListener;
    /**
     * 
     *
     * @var int|null
     */
    protected $nFd;
    /**
     * 
     *
     * @var int|null
     */
    protected $nGoroutines;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $noProxy;
    /**
     * 
     *
     * @var bool|null
     */
    protected $oomKillDisable;
    /**
     * 
     *
     * @var string|null
     */
    protected $oSType;
    /**
     * 
     *
     * @var int|null
     */
    protected $oomScoreAdj;
    /**
     * 
     *
     * @var string|null
     */
    protected $operatingSystem;
    /**
     * 
     *
     * @var InfoGetResponse200RegistryConfig|null
     */
    protected $registryConfig;
    /**
     * 
     *
     * @var bool|null
     */
    protected $swapLimit;
    /**
     * 
     *
     * @var string|null
     */
    protected $systemTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $serverVersion;
    /**
     * 
     *
     * @return string|null
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getContainers(): ?int
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param int|null $containers
     *
     * @return self
     */
    public function setContainers(?int $containers): self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContainersRunning(): ?int
    {
        return $this->containersRunning;
    }
    /**
     * 
     *
     * @param int|null $containersRunning
     *
     * @return self
     */
    public function setContainersRunning(?int $containersRunning): self
    {
        $this->initialized['containersRunning'] = true;
        $this->containersRunning = $containersRunning;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContainersStopped(): ?int
    {
        return $this->containersStopped;
    }
    /**
     * 
     *
     * @param int|null $containersStopped
     *
     * @return self
     */
    public function setContainersStopped(?int $containersStopped): self
    {
        $this->initialized['containersStopped'] = true;
        $this->containersStopped = $containersStopped;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContainersPaused(): ?int
    {
        return $this->containersPaused;
    }
    /**
     * 
     *
     * @param int|null $containersPaused
     *
     * @return self
     */
    public function setContainersPaused(?int $containersPaused): self
    {
        $this->initialized['containersPaused'] = true;
        $this->containersPaused = $containersPaused;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCpuCfsPeriod(): ?bool
    {
        return $this->cpuCfsPeriod;
    }
    /**
     * 
     *
     * @param bool|null $cpuCfsPeriod
     *
     * @return self
     */
    public function setCpuCfsPeriod(?bool $cpuCfsPeriod): self
    {
        $this->initialized['cpuCfsPeriod'] = true;
        $this->cpuCfsPeriod = $cpuCfsPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCpuCfsQuota(): ?bool
    {
        return $this->cpuCfsQuota;
    }
    /**
     * 
     *
     * @param bool|null $cpuCfsQuota
     *
     * @return self
     */
    public function setCpuCfsQuota(?bool $cpuCfsQuota): self
    {
        $this->initialized['cpuCfsQuota'] = true;
        $this->cpuCfsQuota = $cpuCfsQuota;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDebug(): ?bool
    {
        return $this->debug;
    }
    /**
     * 
     *
     * @param bool|null $debug
     *
     * @return self
     */
    public function setDebug(?bool $debug): self
    {
        $this->initialized['debug'] = true;
        $this->debug = $debug;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscoveryBackend(): ?string
    {
        return $this->discoveryBackend;
    }
    /**
     * 
     *
     * @param string|null $discoveryBackend
     *
     * @return self
     */
    public function setDiscoveryBackend(?string $discoveryBackend): self
    {
        $this->initialized['discoveryBackend'] = true;
        $this->discoveryBackend = $discoveryBackend;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDockerRootDir(): ?string
    {
        return $this->dockerRootDir;
    }
    /**
     * 
     *
     * @param string|null $dockerRootDir
     *
     * @return self
     */
    public function setDockerRootDir(?string $dockerRootDir): self
    {
        $this->initialized['dockerRootDir'] = true;
        $this->dockerRootDir = $dockerRootDir;
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
     * @return list<list<string>>|null
     */
    public function getDriverStatus(): ?array
    {
        return $this->driverStatus;
    }
    /**
     * 
     *
     * @param list<list<string>>|null $driverStatus
     *
     * @return self
     */
    public function setDriverStatus(?array $driverStatus): self
    {
        $this->initialized['driverStatus'] = true;
        $this->driverStatus = $driverStatus;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<string>>|null
     */
    public function getSystemStatus(): ?array
    {
        return $this->systemStatus;
    }
    /**
     * 
     *
     * @param list<list<string>>|null $systemStatus
     *
     * @return self
     */
    public function setSystemStatus(?array $systemStatus): self
    {
        $this->initialized['systemStatus'] = true;
        $this->systemStatus = $systemStatus;
        return $this;
    }
    /**
     * 
     *
     * @return InfoGetResponse200Plugins|null
     */
    public function getPlugins(): ?InfoGetResponse200Plugins
    {
        return $this->plugins;
    }
    /**
     * 
     *
     * @param InfoGetResponse200Plugins|null $plugins
     *
     * @return self
     */
    public function setPlugins(?InfoGetResponse200Plugins $plugins): self
    {
        $this->initialized['plugins'] = true;
        $this->plugins = $plugins;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExperimentalBuild(): ?bool
    {
        return $this->experimentalBuild;
    }
    /**
     * 
     *
     * @param bool|null $experimentalBuild
     *
     * @return self
     */
    public function setExperimentalBuild(?bool $experimentalBuild): self
    {
        $this->initialized['experimentalBuild'] = true;
        $this->experimentalBuild = $experimentalBuild;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHttpProxy(): ?string
    {
        return $this->httpProxy;
    }
    /**
     * 
     *
     * @param string|null $httpProxy
     *
     * @return self
     */
    public function setHttpProxy(?string $httpProxy): self
    {
        $this->initialized['httpProxy'] = true;
        $this->httpProxy = $httpProxy;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHttpsProxy(): ?string
    {
        return $this->httpsProxy;
    }
    /**
     * 
     *
     * @param string|null $httpsProxy
     *
     * @return self
     */
    public function setHttpsProxy(?string $httpsProxy): self
    {
        $this->initialized['httpsProxy'] = true;
        $this->httpsProxy = $httpsProxy;
        return $this;
    }
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
     * @return bool|null
     */
    public function getIPv4Forwarding(): ?bool
    {
        return $this->iPv4Forwarding;
    }
    /**
     * 
     *
     * @param bool|null $iPv4Forwarding
     *
     * @return self
     */
    public function setIPv4Forwarding(?bool $iPv4Forwarding): self
    {
        $this->initialized['iPv4Forwarding'] = true;
        $this->iPv4Forwarding = $iPv4Forwarding;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImages(): ?int
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param int|null $images
     *
     * @return self
     */
    public function setImages(?int $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIndexServerAddress(): ?string
    {
        return $this->indexServerAddress;
    }
    /**
     * 
     *
     * @param string|null $indexServerAddress
     *
     * @return self
     */
    public function setIndexServerAddress(?string $indexServerAddress): self
    {
        $this->initialized['indexServerAddress'] = true;
        $this->indexServerAddress = $indexServerAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInitPath(): ?string
    {
        return $this->initPath;
    }
    /**
     * 
     *
     * @param string|null $initPath
     *
     * @return self
     */
    public function setInitPath(?string $initPath): self
    {
        $this->initialized['initPath'] = true;
        $this->initPath = $initPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInitSha1(): ?string
    {
        return $this->initSha1;
    }
    /**
     * 
     *
     * @param string|null $initSha1
     *
     * @return self
     */
    public function setInitSha1(?string $initSha1): self
    {
        $this->initialized['initSha1'] = true;
        $this->initSha1 = $initSha1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKernelVersion(): ?string
    {
        return $this->kernelVersion;
    }
    /**
     * 
     *
     * @param string|null $kernelVersion
     *
     * @return self
     */
    public function setKernelVersion(?string $kernelVersion): self
    {
        $this->initialized['kernelVersion'] = true;
        $this->kernelVersion = $kernelVersion;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param list<string>|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMemTotal(): ?int
    {
        return $this->memTotal;
    }
    /**
     * 
     *
     * @param int|null $memTotal
     *
     * @return self
     */
    public function setMemTotal(?int $memTotal): self
    {
        $this->initialized['memTotal'] = true;
        $this->memTotal = $memTotal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMemoryLimit(): ?bool
    {
        return $this->memoryLimit;
    }
    /**
     * 
     *
     * @param bool|null $memoryLimit
     *
     * @return self
     */
    public function setMemoryLimit(?bool $memoryLimit): self
    {
        $this->initialized['memoryLimit'] = true;
        $this->memoryLimit = $memoryLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNCPU(): ?int
    {
        return $this->nCPU;
    }
    /**
     * 
     *
     * @param int|null $nCPU
     *
     * @return self
     */
    public function setNCPU(?int $nCPU): self
    {
        $this->initialized['nCPU'] = true;
        $this->nCPU = $nCPU;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNEventsListener(): ?int
    {
        return $this->nEventsListener;
    }
    /**
     * 
     *
     * @param int|null $nEventsListener
     *
     * @return self
     */
    public function setNEventsListener(?int $nEventsListener): self
    {
        $this->initialized['nEventsListener'] = true;
        $this->nEventsListener = $nEventsListener;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNFd(): ?int
    {
        return $this->nFd;
    }
    /**
     * 
     *
     * @param int|null $nFd
     *
     * @return self
     */
    public function setNFd(?int $nFd): self
    {
        $this->initialized['nFd'] = true;
        $this->nFd = $nFd;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNGoroutines(): ?int
    {
        return $this->nGoroutines;
    }
    /**
     * 
     *
     * @param int|null $nGoroutines
     *
     * @return self
     */
    public function setNGoroutines(?int $nGoroutines): self
    {
        $this->initialized['nGoroutines'] = true;
        $this->nGoroutines = $nGoroutines;
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
     * @return string|null
     */
    public function getNoProxy(): ?string
    {
        return $this->noProxy;
    }
    /**
     * 
     *
     * @param string|null $noProxy
     *
     * @return self
     */
    public function setNoProxy(?string $noProxy): self
    {
        $this->initialized['noProxy'] = true;
        $this->noProxy = $noProxy;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOomKillDisable(): ?bool
    {
        return $this->oomKillDisable;
    }
    /**
     * 
     *
     * @param bool|null $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable(?bool $oomKillDisable): self
    {
        $this->initialized['oomKillDisable'] = true;
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOSType(): ?string
    {
        return $this->oSType;
    }
    /**
     * 
     *
     * @param string|null $oSType
     *
     * @return self
     */
    public function setOSType(?string $oSType): self
    {
        $this->initialized['oSType'] = true;
        $this->oSType = $oSType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOomScoreAdj(): ?int
    {
        return $this->oomScoreAdj;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }
    /**
     * 
     *
     * @param string|null $operatingSystem
     *
     * @return self
     */
    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->initialized['operatingSystem'] = true;
        $this->operatingSystem = $operatingSystem;
        return $this;
    }
    /**
     * 
     *
     * @return InfoGetResponse200RegistryConfig|null
     */
    public function getRegistryConfig(): ?InfoGetResponse200RegistryConfig
    {
        return $this->registryConfig;
    }
    /**
     * 
     *
     * @param InfoGetResponse200RegistryConfig|null $registryConfig
     *
     * @return self
     */
    public function setRegistryConfig(?InfoGetResponse200RegistryConfig $registryConfig): self
    {
        $this->initialized['registryConfig'] = true;
        $this->registryConfig = $registryConfig;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSwapLimit(): ?bool
    {
        return $this->swapLimit;
    }
    /**
     * 
     *
     * @param bool|null $swapLimit
     *
     * @return self
     */
    public function setSwapLimit(?bool $swapLimit): self
    {
        $this->initialized['swapLimit'] = true;
        $this->swapLimit = $swapLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSystemTime(): ?string
    {
        return $this->systemTime;
    }
    /**
     * 
     *
     * @param string|null $systemTime
     *
     * @return self
     */
    public function setSystemTime(?string $systemTime): self
    {
        $this->initialized['systemTime'] = true;
        $this->systemTime = $systemTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServerVersion(): ?string
    {
        return $this->serverVersion;
    }
    /**
     * 
     *
     * @param string|null $serverVersion
     *
     * @return self
     */
    public function setServerVersion(?string $serverVersion): self
    {
        $this->initialized['serverVersion'] = true;
        $this->serverVersion = $serverVersion;
        return $this;
    }
}
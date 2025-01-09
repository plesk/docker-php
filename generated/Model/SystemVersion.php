<?php

namespace Docker\API\Model;

class SystemVersion
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
     * @var SystemVersionPlatform|null
     */
    protected $platform;
    /**
     * Information about system components
     *
     * @var list<SystemVersionComponentsItem>|null
     */
    protected $components;
    /**
     * The version of the daemon
     *
     * @var string|null
     */
    protected $version;
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @var string|null
     */
    protected $apiVersion;
    /**
     * The minimum API version that is supported by the daemon
     *
     * @var string|null
     */
    protected $minAPIVersion;
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @var string|null
     */
    protected $gitCommit;
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @var string|null
    */
    protected $goVersion;
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     *
     * @var string|null
     */
    protected $os;
    /**
     * The architecture that the daemon is running on
     *
     * @var string|null
     */
    protected $arch;
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
    *
    * @var string|null
    */
    protected $kernelVersion;
    /**
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @var bool|null
    */
    protected $experimental;
    /**
     * The date and time that the daemon was compiled.
     *
     * @var string|null
     */
    protected $buildTime;
    /**
     * 
     *
     * @return SystemVersionPlatform|null
     */
    public function getPlatform(): ?SystemVersionPlatform
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param SystemVersionPlatform|null $platform
     *
     * @return self
     */
    public function setPlatform(?SystemVersionPlatform $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform = $platform;
        return $this;
    }
    /**
     * Information about system components
     *
     * @return list<SystemVersionComponentsItem>|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }
    /**
     * Information about system components
     *
     * @param list<SystemVersionComponentsItem>|null $components
     *
     * @return self
     */
    public function setComponents(?array $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;
        return $this;
    }
    /**
     * The version of the daemon
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * The version of the daemon
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @return string|null
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @param string|null $apiVersion
     *
     * @return self
     */
    public function setApiVersion(?string $apiVersion): self
    {
        $this->initialized['apiVersion'] = true;
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * The minimum API version that is supported by the daemon
     *
     * @return string|null
     */
    public function getMinAPIVersion(): ?string
    {
        return $this->minAPIVersion;
    }
    /**
     * The minimum API version that is supported by the daemon
     *
     * @param string|null $minAPIVersion
     *
     * @return self
     */
    public function setMinAPIVersion(?string $minAPIVersion): self
    {
        $this->initialized['minAPIVersion'] = true;
        $this->minAPIVersion = $minAPIVersion;
        return $this;
    }
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @return string|null
     */
    public function getGitCommit(): ?string
    {
        return $this->gitCommit;
    }
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @param string|null $gitCommit
     *
     * @return self
     */
    public function setGitCommit(?string $gitCommit): self
    {
        $this->initialized['gitCommit'] = true;
        $this->gitCommit = $gitCommit;
        return $this;
    }
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @return string|null
    */
    public function getGoVersion(): ?string
    {
        return $this->goVersion;
    }
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @param string|null $goVersion
    *
    * @return self
    */
    public function setGoVersion(?string $goVersion): self
    {
        $this->initialized['goVersion'] = true;
        $this->goVersion = $goVersion;
        return $this;
    }
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     *
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os;
    }
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
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
     * The architecture that the daemon is running on
     *
     * @return string|null
     */
    public function getArch(): ?string
    {
        return $this->arch;
    }
    /**
     * The architecture that the daemon is running on
     *
     * @param string|null $arch
     *
     * @return self
     */
    public function setArch(?string $arch): self
    {
        $this->initialized['arch'] = true;
        $this->arch = $arch;
        return $this;
    }
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
    *
    * @return string|null
    */
    public function getKernelVersion(): ?string
    {
        return $this->kernelVersion;
    }
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
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
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @return bool|null
    */
    public function getExperimental(): ?bool
    {
        return $this->experimental;
    }
    /**
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @param bool|null $experimental
    *
    * @return self
    */
    public function setExperimental(?bool $experimental): self
    {
        $this->initialized['experimental'] = true;
        $this->experimental = $experimental;
        return $this;
    }
    /**
     * The date and time that the daemon was compiled.
     *
     * @return string|null
     */
    public function getBuildTime(): ?string
    {
        return $this->buildTime;
    }
    /**
     * The date and time that the daemon was compiled.
     *
     * @param string|null $buildTime
     *
     * @return self
     */
    public function setBuildTime(?string $buildTime): self
    {
        $this->initialized['buildTime'] = true;
        $this->buildTime = $buildTime;
        return $this;
    }
}
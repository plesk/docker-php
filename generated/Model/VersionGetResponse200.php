<?php

namespace Docker\API\Model;

class VersionGetResponse200
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
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $apiVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $minAPIVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $gitCommit;
    /**
     * 
     *
     * @var string|null
     */
    protected $goVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $os;
    /**
     * 
     *
     * @var string|null
     */
    protected $arch;
    /**
     * 
     *
     * @var string|null
     */
    protected $kernelVersion;
    /**
     * 
     *
     * @var bool|null
     */
    protected $experimental;
    /**
     * 
     *
     * @var string|null
     */
    protected $buildTime;
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getMinAPIVersion(): ?string
    {
        return $this->minAPIVersion;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getGitCommit(): ?string
    {
        return $this->gitCommit;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getGoVersion(): ?string
    {
        return $this->goVersion;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getArch(): ?string
    {
        return $this->arch;
    }
    /**
     * 
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
     * @return bool|null
     */
    public function getExperimental(): ?bool
    {
        return $this->experimental;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getBuildTime(): ?string
    {
        return $this->buildTime;
    }
    /**
     * 
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
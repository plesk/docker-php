<?php

namespace Docker\API\Model;

class OCIPlatform
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
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * The operating system, for example `linux` or `windows`.
     *
     * @var string|null
     */
    protected $os;
    /**
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @var string|null
    */
    protected $osVersion;
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @var list<string>|null
    */
    protected $osFeatures;
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @var string|null
    */
    protected $variant;
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @return string|null
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
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
     * The operating system, for example `linux` or `windows`.
     *
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os;
    }
    /**
     * The operating system, for example `linux` or `windows`.
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
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @return string|null
    */
    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }
    /**
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @param string|null $osVersion
    *
    * @return self
    */
    public function setOsVersion(?string $osVersion): self
    {
        $this->initialized['osVersion'] = true;
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @return list<string>|null
    */
    public function getOsFeatures(): ?array
    {
        return $this->osFeatures;
    }
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @param list<string>|null $osFeatures
    *
    * @return self
    */
    public function setOsFeatures(?array $osFeatures): self
    {
        $this->initialized['osFeatures'] = true;
        $this->osFeatures = $osFeatures;
        return $this;
    }
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @return string|null
    */
    public function getVariant(): ?string
    {
        return $this->variant;
    }
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @param string|null $variant
    *
    * @return self
    */
    public function setVariant(?string $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
}
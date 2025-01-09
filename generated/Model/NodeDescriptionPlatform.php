<?php

namespace Docker\API\Model;

class NodeDescriptionPlatform
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
     * @var string|null
     */
    protected $oS;
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
     * @return string|null
     */
    public function getOS(): ?string
    {
        return $this->oS;
    }
    /**
     * 
     *
     * @param string|null $oS
     *
     * @return self
     */
    public function setOS(?string $oS): self
    {
        $this->initialized['oS'] = true;
        $this->oS = $oS;
        return $this;
    }
}
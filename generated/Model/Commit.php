<?php

namespace Docker\API\Model;

class Commit
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
     * Actual commit ID of external tool.
     *
     * @var string|null
     */
    protected $iD;
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @var string|null
     */
    protected $expected;
    /**
     * Actual commit ID of external tool.
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * Actual commit ID of external tool.
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
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @return string|null
     */
    public function getExpected(): ?string
    {
        return $this->expected;
    }
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @param string|null $expected
     *
     * @return self
     */
    public function setExpected(?string $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;
        return $this;
    }
}
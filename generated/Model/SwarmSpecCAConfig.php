<?php

namespace Docker\API\Model;

class SwarmSpecCAConfig
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
     * The duration node certificates are issued for.
     *
     * @var int|null
     */
    protected $nodeCertExpiry;
    /**
     * Configuration for forwarding signing requests to an external certificate authority.
     *
     * @var list<SwarmSpecCAConfigExternalCAsItem>|null
     */
    protected $externalCAs;
    /**
     * The duration node certificates are issued for.
     *
     * @return int|null
     */
    public function getNodeCertExpiry(): ?int
    {
        return $this->nodeCertExpiry;
    }
    /**
     * The duration node certificates are issued for.
     *
     * @param int|null $nodeCertExpiry
     *
     * @return self
     */
    public function setNodeCertExpiry(?int $nodeCertExpiry): self
    {
        $this->initialized['nodeCertExpiry'] = true;
        $this->nodeCertExpiry = $nodeCertExpiry;
        return $this;
    }
    /**
     * Configuration for forwarding signing requests to an external certificate authority.
     *
     * @return list<SwarmSpecCAConfigExternalCAsItem>|null
     */
    public function getExternalCAs(): ?array
    {
        return $this->externalCAs;
    }
    /**
     * Configuration for forwarding signing requests to an external certificate authority.
     *
     * @param list<SwarmSpecCAConfigExternalCAsItem>|null $externalCAs
     *
     * @return self
     */
    public function setExternalCAs(?array $externalCAs): self
    {
        $this->initialized['externalCAs'] = true;
        $this->externalCAs = $externalCAs;
        return $this;
    }
}
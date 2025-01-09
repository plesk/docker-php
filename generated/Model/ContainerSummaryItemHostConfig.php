<?php

namespace Docker\API\Model;

class ContainerSummaryItemHostConfig
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
    protected $networkMode;
    /**
     * 
     *
     * @return string|null
     */
    public function getNetworkMode(): ?string
    {
        return $this->networkMode;
    }
    /**
     * 
     *
     * @param string|null $networkMode
     *
     * @return self
     */
    public function setNetworkMode(?string $networkMode): self
    {
        $this->initialized['networkMode'] = true;
        $this->networkMode = $networkMode;
        return $this;
    }
}
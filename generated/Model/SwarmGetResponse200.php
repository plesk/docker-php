<?php

namespace Docker\API\Model;

class SwarmGetResponse200
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
     * The ID of the swarm.
     *
     * @var string|null
     */
    protected $iD;
    /**
     * 
     *
     * @var ClusterInfoVersion|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * The tokens workers and managers need to join the swarm.
     *
     * @var SwarmGetResponse200JoinTokens|null
     */
    protected $joinTokens;
    /**
     * The ID of the swarm.
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the swarm.
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
     * @return ClusterInfoVersion|null
     */
    public function getVersion(): ?ClusterInfoVersion
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param ClusterInfoVersion|null $version
     *
     * @return self
     */
    public function setVersion(?ClusterInfoVersion $version): self
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
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @return SwarmSpec|null
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @param SwarmSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * The tokens workers and managers need to join the swarm.
     *
     * @return SwarmGetResponse200JoinTokens|null
     */
    public function getJoinTokens(): ?SwarmGetResponse200JoinTokens
    {
        return $this->joinTokens;
    }
    /**
     * The tokens workers and managers need to join the swarm.
     *
     * @param SwarmGetResponse200JoinTokens|null $joinTokens
     *
     * @return self
     */
    public function setJoinTokens(?SwarmGetResponse200JoinTokens $joinTokens): self
    {
        $this->initialized['joinTokens'] = true;
        $this->joinTokens = $joinTokens;
        return $this;
    }
}
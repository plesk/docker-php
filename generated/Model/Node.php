<?php

namespace Docker\API\Model;

class Node
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
    protected $iD;
    /**
     * 
     *
     * @var NodeVersion|null
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
     * 
     *
     * @var NodeSpec|null
     */
    protected $spec;
    /**
     * 
     *
     * @var NodeDescription|null
     */
    protected $description;
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
     * @return NodeVersion|null
     */
    public function getVersion(): ?NodeVersion
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param NodeVersion|null $version
     *
     * @return self
     */
    public function setVersion(?NodeVersion $version): self
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
     * 
     *
     * @return NodeSpec|null
     */
    public function getSpec(): ?NodeSpec
    {
        return $this->spec;
    }
    /**
     * 
     *
     * @param NodeSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?NodeSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * 
     *
     * @return NodeDescription|null
     */
    public function getDescription(): ?NodeDescription
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param NodeDescription|null $description
     *
     * @return self
     */
    public function setDescription(?NodeDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}
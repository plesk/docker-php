<?php

namespace Docker\API\Model;

class GenericResourcesItem
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
     * @var GenericResourcesItemNamedResourceSpec|null
     */
    protected $namedResourceSpec;
    /**
     * 
     *
     * @var GenericResourcesItemDiscreteResourceSpec|null
     */
    protected $discreteResourceSpec;
    /**
     * 
     *
     * @return GenericResourcesItemNamedResourceSpec|null
     */
    public function getNamedResourceSpec(): ?GenericResourcesItemNamedResourceSpec
    {
        return $this->namedResourceSpec;
    }
    /**
     * 
     *
     * @param GenericResourcesItemNamedResourceSpec|null $namedResourceSpec
     *
     * @return self
     */
    public function setNamedResourceSpec(?GenericResourcesItemNamedResourceSpec $namedResourceSpec): self
    {
        $this->initialized['namedResourceSpec'] = true;
        $this->namedResourceSpec = $namedResourceSpec;
        return $this;
    }
    /**
     * 
     *
     * @return GenericResourcesItemDiscreteResourceSpec|null
     */
    public function getDiscreteResourceSpec(): ?GenericResourcesItemDiscreteResourceSpec
    {
        return $this->discreteResourceSpec;
    }
    /**
     * 
     *
     * @param GenericResourcesItemDiscreteResourceSpec|null $discreteResourceSpec
     *
     * @return self
     */
    public function setDiscreteResourceSpec(?GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec): self
    {
        $this->initialized['discreteResourceSpec'] = true;
        $this->discreteResourceSpec = $discreteResourceSpec;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class InfoGetResponse200RegistryConfig
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
     * @var array<string, InfoGetResponse200RegistryConfigIndexConfigsItem>|null
     */
    protected $indexConfigs;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $insecureRegistryCIDRs;
    /**
     * 
     *
     * @return array<string, InfoGetResponse200RegistryConfigIndexConfigsItem>|null
     */
    public function getIndexConfigs(): ?iterable
    {
        return $this->indexConfigs;
    }
    /**
     * 
     *
     * @param array<string, InfoGetResponse200RegistryConfigIndexConfigsItem>|null $indexConfigs
     *
     * @return self
     */
    public function setIndexConfigs(?iterable $indexConfigs): self
    {
        $this->initialized['indexConfigs'] = true;
        $this->indexConfigs = $indexConfigs;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getInsecureRegistryCIDRs(): ?array
    {
        return $this->insecureRegistryCIDRs;
    }
    /**
     * 
     *
     * @param list<string>|null $insecureRegistryCIDRs
     *
     * @return self
     */
    public function setInsecureRegistryCIDRs(?array $insecureRegistryCIDRs): self
    {
        $this->initialized['insecureRegistryCIDRs'] = true;
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;
        return $this;
    }
}
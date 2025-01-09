<?php

namespace Docker\API\Model;

class InfoGetResponse200RegistryConfigIndexConfigsItem
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
     * @var list<string>|null
     */
    protected $mirrors;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var bool|null
     */
    protected $official;
    /**
     * 
     *
     * @var bool|null
     */
    protected $secure;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getMirrors(): ?array
    {
        return $this->mirrors;
    }
    /**
     * 
     *
     * @param list<string>|null $mirrors
     *
     * @return self
     */
    public function setMirrors(?array $mirrors): self
    {
        $this->initialized['mirrors'] = true;
        $this->mirrors = $mirrors;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOfficial(): ?bool
    {
        return $this->official;
    }
    /**
     * 
     *
     * @param bool|null $official
     *
     * @return self
     */
    public function setOfficial(?bool $official): self
    {
        $this->initialized['official'] = true;
        $this->official = $official;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSecure(): ?bool
    {
        return $this->secure;
    }
    /**
     * 
     *
     * @param bool|null $secure
     *
     * @return self
     */
    public function setSecure(?bool $secure): self
    {
        $this->initialized['secure'] = true;
        $this->secure = $secure;
        return $this;
    }
}
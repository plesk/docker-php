<?php

namespace Docker\API\Model;

class ServiceCreateResponse
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
     * The ID of the created service.
     *
     * @var string|null
     */
    protected $iD;
    /**
    * Optional warning message.
    
    FIXME(thaJeztah): this should have "omitempty" in the generated type.
    
    *
    * @var list<string>|null
    */
    protected $warnings;
    /**
     * The ID of the created service.
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the created service.
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
    * Optional warning message.
    
    FIXME(thaJeztah): this should have "omitempty" in the generated type.
    
    *
    * @return list<string>|null
    */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
    /**
    * Optional warning message.
    
    FIXME(thaJeztah): this should have "omitempty" in the generated type.
    
    *
    * @param list<string>|null $warnings
    *
    * @return self
    */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}
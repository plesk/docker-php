<?php

namespace Docker\API\Model;

class SwarmSpecTaskDefaultsLogDriver
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
     * The log driver to use as a default for new tasks.
     *
     * @var string|null
     */
    protected $name;
    /**
    * Driver-specific options for the selected log driver, specified
    as key/value pairs.
    
    *
    * @var array<string, string>|null
    */
    protected $options;
    /**
     * The log driver to use as a default for new tasks.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The log driver to use as a default for new tasks.
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
    * Driver-specific options for the selected log driver, specified
    as key/value pairs.
    
    *
    * @return array<string, string>|null
    */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }
    /**
    * Driver-specific options for the selected log driver, specified
    as key/value pairs.
    
    *
    * @param array<string, string>|null $options
    *
    * @return self
    */
    public function setOptions(?iterable $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}
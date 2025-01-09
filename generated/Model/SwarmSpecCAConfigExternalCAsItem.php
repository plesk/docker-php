<?php

namespace Docker\API\Model;

class SwarmSpecCAConfigExternalCAsItem
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
    * Protocol for communication with the external CA (currently
    only `cfssl` is supported).
    
    *
    * @var string|null
    */
    protected $protocol = 'cfssl';
    /**
     * URL where certificate signing requests should be sent.
     *
     * @var string|null
     */
    protected $uRL;
    /**
    * An object with key/value pairs that are interpreted as
    protocol-specific options for the external CA driver.
    
    *
    * @var array<string, string>|null
    */
    protected $options;
    /**
    * The root CA certificate (in PEM format) this external CA uses
    to issue TLS certificates (assumed to be to the current swarm
    root CA certificate if not provided).
    
    *
    * @var string|null
    */
    protected $cACert;
    /**
    * Protocol for communication with the external CA (currently
    only `cfssl` is supported).
    
    *
    * @return string|null
    */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }
    /**
    * Protocol for communication with the external CA (currently
    only `cfssl` is supported).
    
    *
    * @param string|null $protocol
    *
    * @return self
    */
    public function setProtocol(?string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * URL where certificate signing requests should be sent.
     *
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->uRL;
    }
    /**
     * URL where certificate signing requests should be sent.
     *
     * @param string|null $uRL
     *
     * @return self
     */
    public function setURL(?string $uRL): self
    {
        $this->initialized['uRL'] = true;
        $this->uRL = $uRL;
        return $this;
    }
    /**
    * An object with key/value pairs that are interpreted as
    protocol-specific options for the external CA driver.
    
    *
    * @return array<string, string>|null
    */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }
    /**
    * An object with key/value pairs that are interpreted as
    protocol-specific options for the external CA driver.
    
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
    /**
    * The root CA certificate (in PEM format) this external CA uses
    to issue TLS certificates (assumed to be to the current swarm
    root CA certificate if not provided).
    
    *
    * @return string|null
    */
    public function getCACert(): ?string
    {
        return $this->cACert;
    }
    /**
    * The root CA certificate (in PEM format) this external CA uses
    to issue TLS certificates (assumed to be to the current swarm
    root CA certificate if not provided).
    
    *
    * @param string|null $cACert
    *
    * @return self
    */
    public function setCACert(?string $cACert): self
    {
        $this->initialized['cACert'] = true;
        $this->cACert = $cACert;
        return $this;
    }
}
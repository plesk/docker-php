<?php

namespace Docker\API\Model;

class ClusterVolumeSpecAccessModeSecretsItem
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
    * Key is the name of the key of the key-value pair passed to
    the plugin.
    
    *
    * @var string|null
    */
    protected $key;
    /**
    * Secret is the swarm Secret object from which to read data.
    This can be a Secret name or ID. The Secret data is
    retrieved by swarm and used as the value of the key-value
    pair passed to the plugin.
    
    *
    * @var string|null
    */
    protected $secret;
    /**
    * Key is the name of the key of the key-value pair passed to
    the plugin.
    
    *
    * @return string|null
    */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
    * Key is the name of the key of the key-value pair passed to
    the plugin.
    
    *
    * @param string|null $key
    *
    * @return self
    */
    public function setKey(?string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
    * Secret is the swarm Secret object from which to read data.
    This can be a Secret name or ID. The Secret data is
    retrieved by swarm and used as the value of the key-value
    pair passed to the plugin.
    
    *
    * @return string|null
    */
    public function getSecret(): ?string
    {
        return $this->secret;
    }
    /**
    * Secret is the swarm Secret object from which to read data.
    This can be a Secret name or ID. The Secret data is
    retrieved by swarm and used as the value of the key-value
    pair passed to the plugin.
    
    *
    * @param string|null $secret
    *
    * @return self
    */
    public function setSecret(?string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
}
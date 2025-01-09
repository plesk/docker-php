<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesSeccomp
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
    protected $mode;
    /**
     * The custom seccomp profile as a json object
     *
     * @var string|null
     */
    protected $profile;
    /**
     * 
     *
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string|null $mode
     *
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * The custom seccomp profile as a json object
     *
     * @return string|null
     */
    public function getProfile(): ?string
    {
        return $this->profile;
    }
    /**
     * The custom seccomp profile as a json object
     *
     * @param string|null $profile
     *
     * @return self
     */
    public function setProfile(?string $profile): self
    {
        $this->initialized['profile'] = true;
        $this->profile = $profile;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class ProcessConfig
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
     * @var bool|null
     */
    protected $privileged;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var bool|null
     */
    protected $tty;
    /**
     * 
     *
     * @var string|null
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $arguments;
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrivileged(): ?bool
    {
        return $this->privileged;
    }
    /**
     * 
     *
     * @param bool|null $privileged
     *
     * @return self
     */
    public function setPrivileged(?bool $privileged): self
    {
        $this->initialized['privileged'] = true;
        $this->privileged = $privileged;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTty(): ?bool
    {
        return $this->tty;
    }
    /**
     * 
     *
     * @param bool|null $tty
     *
     * @return self
     */
    public function setTty(?bool $tty): self
    {
        $this->initialized['tty'] = true;
        $this->tty = $tty;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntrypoint(): ?string
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param string|null $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(?string $entrypoint): self
    {
        $this->initialized['entrypoint'] = true;
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getArguments(): ?array
    {
        return $this->arguments;
    }
    /**
     * 
     *
     * @param list<string>|null $arguments
     *
     * @return self
     */
    public function setArguments(?array $arguments): self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}
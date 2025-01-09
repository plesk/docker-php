<?php

namespace Docker\API\Model;

class ContainersIdJsonGetResponse200State
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
     * The status of the container. For example, `running` or `exited`.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Whether this container is running.
     *
     * @var bool|null
     */
    protected $running;
    /**
     * Whether this container is paused.
     *
     * @var bool|null
     */
    protected $paused;
    /**
     * Whether this container is restarting.
     *
     * @var bool|null
     */
    protected $restarting;
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @var bool|null
     */
    protected $oOMKilled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dead;
    /**
     * The process ID of this container
     *
     * @var int|null
     */
    protected $pid;
    /**
     * The last exit code of this container
     *
     * @var int|null
     */
    protected $exitCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * The time when this container was last started.
     *
     * @var string|null
     */
    protected $startedAt;
    /**
     * The time when this container last exited.
     *
     * @var string|null
     */
    protected $finishedAt;
    /**
     * The status of the container. For example, `running` or `exited`.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The status of the container. For example, `running` or `exited`.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Whether this container is running.
     *
     * @return bool|null
     */
    public function getRunning(): ?bool
    {
        return $this->running;
    }
    /**
     * Whether this container is running.
     *
     * @param bool|null $running
     *
     * @return self
     */
    public function setRunning(?bool $running): self
    {
        $this->initialized['running'] = true;
        $this->running = $running;
        return $this;
    }
    /**
     * Whether this container is paused.
     *
     * @return bool|null
     */
    public function getPaused(): ?bool
    {
        return $this->paused;
    }
    /**
     * Whether this container is paused.
     *
     * @param bool|null $paused
     *
     * @return self
     */
    public function setPaused(?bool $paused): self
    {
        $this->initialized['paused'] = true;
        $this->paused = $paused;
        return $this;
    }
    /**
     * Whether this container is restarting.
     *
     * @return bool|null
     */
    public function getRestarting(): ?bool
    {
        return $this->restarting;
    }
    /**
     * Whether this container is restarting.
     *
     * @param bool|null $restarting
     *
     * @return self
     */
    public function setRestarting(?bool $restarting): self
    {
        $this->initialized['restarting'] = true;
        $this->restarting = $restarting;
        return $this;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @return bool|null
     */
    public function getOOMKilled(): ?bool
    {
        return $this->oOMKilled;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @param bool|null $oOMKilled
     *
     * @return self
     */
    public function setOOMKilled(?bool $oOMKilled): self
    {
        $this->initialized['oOMKilled'] = true;
        $this->oOMKilled = $oOMKilled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDead(): ?bool
    {
        return $this->dead;
    }
    /**
     * 
     *
     * @param bool|null $dead
     *
     * @return self
     */
    public function setDead(?bool $dead): self
    {
        $this->initialized['dead'] = true;
        $this->dead = $dead;
        return $this;
    }
    /**
     * The process ID of this container
     *
     * @return int|null
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }
    /**
     * The process ID of this container
     *
     * @param int|null $pid
     *
     * @return self
     */
    public function setPid(?int $pid): self
    {
        $this->initialized['pid'] = true;
        $this->pid = $pid;
        return $this;
    }
    /**
     * The last exit code of this container
     *
     * @return int|null
     */
    public function getExitCode(): ?int
    {
        return $this->exitCode;
    }
    /**
     * The last exit code of this container
     *
     * @param int|null $exitCode
     *
     * @return self
     */
    public function setExitCode(?int $exitCode): self
    {
        $this->initialized['exitCode'] = true;
        $this->exitCode = $exitCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * The time when this container was last started.
     *
     * @return string|null
     */
    public function getStartedAt(): ?string
    {
        return $this->startedAt;
    }
    /**
     * The time when this container was last started.
     *
     * @param string|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The time when this container last exited.
     *
     * @return string|null
     */
    public function getFinishedAt(): ?string
    {
        return $this->finishedAt;
    }
    /**
     * The time when this container last exited.
     *
     * @param string|null $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(?string $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
}
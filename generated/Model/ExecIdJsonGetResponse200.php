<?php

namespace Docker\API\Model;

class ExecIdJsonGetResponse200
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
    protected $iD;
    /**
     * 
     *
     * @var bool|null
     */
    protected $running;
    /**
     * 
     *
     * @var int|null
     */
    protected $exitCode;
    /**
     * 
     *
     * @var ProcessConfig|null
     */
    protected $processConfig;
    /**
     * 
     *
     * @var bool|null
     */
    protected $openStdin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $openStderr;
    /**
     * 
     *
     * @var bool|null
     */
    protected $openStdout;
    /**
     * 
     *
     * @var string|null
     */
    protected $containerID;
    /**
     * The system process ID for the exec process.
     *
     * @var int|null
     */
    protected $pid;
    /**
     * 
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getRunning(): ?bool
    {
        return $this->running;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getExitCode(): ?int
    {
        return $this->exitCode;
    }
    /**
     * 
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
     * @return ProcessConfig|null
     */
    public function getProcessConfig(): ?ProcessConfig
    {
        return $this->processConfig;
    }
    /**
     * 
     *
     * @param ProcessConfig|null $processConfig
     *
     * @return self
     */
    public function setProcessConfig(?ProcessConfig $processConfig): self
    {
        $this->initialized['processConfig'] = true;
        $this->processConfig = $processConfig;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOpenStdin(): ?bool
    {
        return $this->openStdin;
    }
    /**
     * 
     *
     * @param bool|null $openStdin
     *
     * @return self
     */
    public function setOpenStdin(?bool $openStdin): self
    {
        $this->initialized['openStdin'] = true;
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOpenStderr(): ?bool
    {
        return $this->openStderr;
    }
    /**
     * 
     *
     * @param bool|null $openStderr
     *
     * @return self
     */
    public function setOpenStderr(?bool $openStderr): self
    {
        $this->initialized['openStderr'] = true;
        $this->openStderr = $openStderr;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOpenStdout(): ?bool
    {
        return $this->openStdout;
    }
    /**
     * 
     *
     * @param bool|null $openStdout
     *
     * @return self
     */
    public function setOpenStdout(?bool $openStdout): self
    {
        $this->initialized['openStdout'] = true;
        $this->openStdout = $openStdout;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContainerID(): ?string
    {
        return $this->containerID;
    }
    /**
     * 
     *
     * @param string|null $containerID
     *
     * @return self
     */
    public function setContainerID(?string $containerID): self
    {
        $this->initialized['containerID'] = true;
        $this->containerID = $containerID;
        return $this;
    }
    /**
     * The system process ID for the exec process.
     *
     * @return int|null
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }
    /**
     * The system process ID for the exec process.
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
}
<?php

namespace Docker\API\Model;

class TaskStatus
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
    protected $timestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $err;
    /**
     * 
     *
     * @var TaskStatusContainerStatus|null
     */
    protected $containerStatus;
    /**
     * 
     *
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp(?string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getErr(): ?string
    {
        return $this->err;
    }
    /**
     * 
     *
     * @param string|null $err
     *
     * @return self
     */
    public function setErr(?string $err): self
    {
        $this->initialized['err'] = true;
        $this->err = $err;
        return $this;
    }
    /**
     * 
     *
     * @return TaskStatusContainerStatus|null
     */
    public function getContainerStatus(): ?TaskStatusContainerStatus
    {
        return $this->containerStatus;
    }
    /**
     * 
     *
     * @param TaskStatusContainerStatus|null $containerStatus
     *
     * @return self
     */
    public function setContainerStatus(?TaskStatusContainerStatus $containerStatus): self
    {
        $this->initialized['containerStatus'] = true;
        $this->containerStatus = $containerStatus;
        return $this;
    }
}
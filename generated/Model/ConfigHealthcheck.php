<?php

namespace Docker\API\Model;

class ConfigHealthcheck
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
    * The test to perform. Possible values are:
    
    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell
    
    *
    * @var list<string>|null
    */
    protected $test;
    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @var int|null
     */
    protected $interval;
    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @var int|null
     */
    protected $timeout;
    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @var int|null
     */
    protected $retries;
    /**
    * The test to perform. Possible values are:
    
    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell
    
    *
    * @return list<string>|null
    */
    public function getTest(): ?array
    {
        return $this->test;
    }
    /**
    * The test to perform. Possible values are:
    
    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell
    
    *
    * @param list<string>|null $test
    *
    * @return self
    */
    public function setTest(?array $test): self
    {
        $this->initialized['test'] = true;
        $this->test = $test;
        return $this;
    }
    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @return int|null
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }
    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @param int|null $interval
     *
     * @return self
     */
    public function setInterval(?int $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }
    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @param int|null $timeout
     *
     * @return self
     */
    public function setTimeout(?int $timeout): self
    {
        $this->initialized['timeout'] = true;
        $this->timeout = $timeout;
        return $this;
    }
    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @return int|null
     */
    public function getRetries(): ?int
    {
        return $this->retries;
    }
    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @param int|null $retries
     *
     * @return self
     */
    public function setRetries(?int $retries): self
    {
        $this->initialized['retries'] = true;
        $this->retries = $retries;
        return $this;
    }
}
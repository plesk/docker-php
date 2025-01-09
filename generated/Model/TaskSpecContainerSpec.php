<?php

namespace Docker\API\Model;

class TaskSpecContainerSpec
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
     * The image name to use for the container.
     *
     * @var string|null
     */
    protected $image;
    /**
     * The command to be run in the image.
     *
     * @var list<string>|null
     */
    protected $command;
    /**
     * Arguments to the command.
     *
     * @var list<string>|null
     */
    protected $args;
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @var list<string>|null
     */
    protected $env;
    /**
     * The working directory for commands to run in.
     *
     * @var string|null
     */
    protected $dir;
    /**
     * The user inside the container.
     *
     * @var string|null
     */
    protected $user;
    /**
     * User-defined key/value data.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @var bool|null
     */
    protected $tTY;
    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @var list<Mount>|null
     */
    protected $mounts;
    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @var int|null
     */
    protected $stopGracePeriod;
    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @var TaskSpecContainerSpecDNSConfig|null
     */
    protected $dNSConfig;
    /**
     * The image name to use for the container.
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * The image name to use for the container.
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * The command to be run in the image.
     *
     * @return list<string>|null
     */
    public function getCommand(): ?array
    {
        return $this->command;
    }
    /**
     * The command to be run in the image.
     *
     * @param list<string>|null $command
     *
     * @return self
     */
    public function setCommand(?array $command): self
    {
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * Arguments to the command.
     *
     * @return list<string>|null
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }
    /**
     * Arguments to the command.
     *
     * @param list<string>|null $args
     *
     * @return self
     */
    public function setArgs(?array $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @return list<string>|null
     */
    public function getEnv(): ?array
    {
        return $this->env;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @param list<string>|null $env
     *
     * @return self
     */
    public function setEnv(?array $env): self
    {
        $this->initialized['env'] = true;
        $this->env = $env;
        return $this;
    }
    /**
     * The working directory for commands to run in.
     *
     * @return string|null
     */
    public function getDir(): ?string
    {
        return $this->dir;
    }
    /**
     * The working directory for commands to run in.
     *
     * @param string|null $dir
     *
     * @return self
     */
    public function setDir(?string $dir): self
    {
        $this->initialized['dir'] = true;
        $this->dir = $dir;
        return $this;
    }
    /**
     * The user inside the container.
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * The user inside the container.
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
     * User-defined key/value data.
     *
     * @return array<string, string>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value data.
     *
     * @param array<string, string>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @return bool|null
     */
    public function getTTY(): ?bool
    {
        return $this->tTY;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @param bool|null $tTY
     *
     * @return self
     */
    public function setTTY(?bool $tTY): self
    {
        $this->initialized['tTY'] = true;
        $this->tTY = $tTY;
        return $this;
    }
    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @return list<Mount>|null
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }
    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @param list<Mount>|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts): self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @return int|null
     */
    public function getStopGracePeriod(): ?int
    {
        return $this->stopGracePeriod;
    }
    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @param int|null $stopGracePeriod
     *
     * @return self
     */
    public function setStopGracePeriod(?int $stopGracePeriod): self
    {
        $this->initialized['stopGracePeriod'] = true;
        $this->stopGracePeriod = $stopGracePeriod;
        return $this;
    }
    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @return TaskSpecContainerSpecDNSConfig|null
     */
    public function getDNSConfig(): ?TaskSpecContainerSpecDNSConfig
    {
        return $this->dNSConfig;
    }
    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @param TaskSpecContainerSpecDNSConfig|null $dNSConfig
     *
     * @return self
     */
    public function setDNSConfig(?TaskSpecContainerSpecDNSConfig $dNSConfig): self
    {
        $this->initialized['dNSConfig'] = true;
        $this->dNSConfig = $dNSConfig;
        return $this;
    }
}
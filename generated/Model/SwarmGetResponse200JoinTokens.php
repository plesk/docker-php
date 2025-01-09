<?php

namespace Docker\API\Model;

class SwarmGetResponse200JoinTokens
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
     * The token workers can use to join the swarm.
     *
     * @var string|null
     */
    protected $worker;
    /**
     * The token managers can use to join the swarm.
     *
     * @var string|null
     */
    protected $manager;
    /**
     * The token workers can use to join the swarm.
     *
     * @return string|null
     */
    public function getWorker(): ?string
    {
        return $this->worker;
    }
    /**
     * The token workers can use to join the swarm.
     *
     * @param string|null $worker
     *
     * @return self
     */
    public function setWorker(?string $worker): self
    {
        $this->initialized['worker'] = true;
        $this->worker = $worker;
        return $this;
    }
    /**
     * The token managers can use to join the swarm.
     *
     * @return string|null
     */
    public function getManager(): ?string
    {
        return $this->manager;
    }
    /**
     * The token managers can use to join the swarm.
     *
     * @param string|null $manager
     *
     * @return self
     */
    public function setManager(?string $manager): self
    {
        $this->initialized['manager'] = true;
        $this->manager = $manager;
        return $this;
    }
}
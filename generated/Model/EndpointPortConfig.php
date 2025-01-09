<?php

namespace Docker\API\Model;

class EndpointPortConfig
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $protocol;
    /**
     * The port inside the container.
     *
     * @var int|null
     */
    protected $targetPort;
    /**
     * The port on the swarm hosts.
     *
     * @var int|null
     */
    protected $publishedPort;
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }
    /**
     * 
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
     * The port inside the container.
     *
     * @return int|null
     */
    public function getTargetPort(): ?int
    {
        return $this->targetPort;
    }
    /**
     * The port inside the container.
     *
     * @param int|null $targetPort
     *
     * @return self
     */
    public function setTargetPort(?int $targetPort): self
    {
        $this->initialized['targetPort'] = true;
        $this->targetPort = $targetPort;
        return $this;
    }
    /**
     * The port on the swarm hosts.
     *
     * @return int|null
     */
    public function getPublishedPort(): ?int
    {
        return $this->publishedPort;
    }
    /**
     * The port on the swarm hosts.
     *
     * @param int|null $publishedPort
     *
     * @return self
     */
    public function setPublishedPort(?int $publishedPort): self
    {
        $this->initialized['publishedPort'] = true;
        $this->publishedPort = $publishedPort;
        return $this;
    }
}
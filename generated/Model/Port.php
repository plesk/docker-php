<?php

namespace Docker\API\Model;

class Port
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
    protected $iP;
    /**
     * Port on the container
     *
     * @var int|null
     */
    protected $privatePort;
    /**
     * Port exposed on the host
     *
     * @var int|null
     */
    protected $publicPort;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string|null
     */
    public function getIP(): ?string
    {
        return $this->iP;
    }
    /**
     * 
     *
     * @param string|null $iP
     *
     * @return self
     */
    public function setIP(?string $iP): self
    {
        $this->initialized['iP'] = true;
        $this->iP = $iP;
        return $this;
    }
    /**
     * Port on the container
     *
     * @return int|null
     */
    public function getPrivatePort(): ?int
    {
        return $this->privatePort;
    }
    /**
     * Port on the container
     *
     * @param int|null $privatePort
     *
     * @return self
     */
    public function setPrivatePort(?int $privatePort): self
    {
        $this->initialized['privatePort'] = true;
        $this->privatePort = $privatePort;
        return $this;
    }
    /**
     * Port exposed on the host
     *
     * @return int|null
     */
    public function getPublicPort(): ?int
    {
        return $this->publicPort;
    }
    /**
     * Port exposed on the host
     *
     * @param int|null $publicPort
     *
     * @return self
     */
    public function setPublicPort(?int $publicPort): self
    {
        $this->initialized['publicPort'] = true;
        $this->publicPort = $publicPort;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
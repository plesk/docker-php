<?php

namespace Docker\API\Model;

class ThrottleDevice
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
     * Device path
     *
     * @var string|null
     */
    protected $path;
    /**
     * Rate
     *
     * @var int|null
     */
    protected $rate;
    /**
     * Device path
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * Device path
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Rate
     *
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }
    /**
     * Rate
     *
     * @param int|null $rate
     *
     * @return self
     */
    public function setRate(?int $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
}
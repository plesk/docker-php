<?php

namespace Docker\API\Model;

class ProgressDetail
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
     * @var int|null
     */
    protected $code;
    /**
     * 
     *
     * @var int|null
     */
    protected $message;
    /**
     * 
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMessage(): ?int
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param int|null $message
     *
     * @return self
     */
    public function setMessage(?int $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class AuthPostResponse200
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
     * The status of the authentication
     *
     * @var string|null
     */
    protected $status;
    /**
     * An opaque token used to authenticate a user after a successful login
     *
     * @var string|null
     */
    protected $identityToken;
    /**
     * The status of the authentication
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The status of the authentication
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
     * An opaque token used to authenticate a user after a successful login
     *
     * @return string|null
     */
    public function getIdentityToken(): ?string
    {
        return $this->identityToken;
    }
    /**
     * An opaque token used to authenticate a user after a successful login
     *
     * @param string|null $identityToken
     *
     * @return self
     */
    public function setIdentityToken(?string $identityToken): self
    {
        $this->initialized['identityToken'] = true;
        $this->identityToken = $identityToken;
        return $this;
    }
}
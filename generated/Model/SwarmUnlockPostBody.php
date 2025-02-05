<?php

namespace Docker\API\Model;

class SwarmUnlockPostBody
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
     * The swarm's unlock key.
     *
     * @var string|null
     */
    protected $unlockKey;
    /**
     * The swarm's unlock key.
     *
     * @return string|null
     */
    public function getUnlockKey(): ?string
    {
        return $this->unlockKey;
    }
    /**
     * The swarm's unlock key.
     *
     * @param string|null $unlockKey
     *
     * @return self
     */
    public function setUnlockKey(?string $unlockKey): self
    {
        $this->initialized['unlockKey'] = true;
        $this->unlockKey = $unlockKey;
        return $this;
    }
}
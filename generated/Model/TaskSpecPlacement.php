<?php

namespace Docker\API\Model;

class TaskSpecPlacement
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
     * An array of constraints.
     *
     * @var list<string>|null
     */
    protected $constraints;
    /**
     * An array of constraints.
     *
     * @return list<string>|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }
    /**
     * An array of constraints.
     *
     * @param list<string>|null $constraints
     *
     * @return self
     */
    public function setConstraints(?array $constraints): self
    {
        $this->initialized['constraints'] = true;
        $this->constraints = $constraints;
        return $this;
    }
}
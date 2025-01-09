<?php

namespace Docker\API\Model;

class TaskSpecResources
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
     * Define resources limits.
     *
     * @var TaskSpecResourcesLimits|null
     */
    protected $limits;
    /**
     * Define resources reservation.
     *
     * @var TaskSpecResourcesReservations|null
     */
    protected $reservations;
    /**
     * Define resources limits.
     *
     * @return TaskSpecResourcesLimits|null
     */
    public function getLimits(): ?TaskSpecResourcesLimits
    {
        return $this->limits;
    }
    /**
     * Define resources limits.
     *
     * @param TaskSpecResourcesLimits|null $limits
     *
     * @return self
     */
    public function setLimits(?TaskSpecResourcesLimits $limits): self
    {
        $this->initialized['limits'] = true;
        $this->limits = $limits;
        return $this;
    }
    /**
     * Define resources reservation.
     *
     * @return TaskSpecResourcesReservations|null
     */
    public function getReservations(): ?TaskSpecResourcesReservations
    {
        return $this->reservations;
    }
    /**
     * Define resources reservation.
     *
     * @param TaskSpecResourcesReservations|null $reservations
     *
     * @return self
     */
    public function setReservations(?TaskSpecResourcesReservations $reservations): self
    {
        $this->initialized['reservations'] = true;
        $this->reservations = $reservations;
        return $this;
    }
}
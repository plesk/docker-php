<?php

namespace Docker\API\Model;

class VolumesNamePutBody
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
     * Cluster-specific options used to create the volume.
     *
     * @var ClusterVolumeSpec|null
     */
    protected $spec;
    /**
     * Cluster-specific options used to create the volume.
     *
     * @return ClusterVolumeSpec|null
     */
    public function getSpec(): ?ClusterVolumeSpec
    {
        return $this->spec;
    }
    /**
     * Cluster-specific options used to create the volume.
     *
     * @param ClusterVolumeSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?ClusterVolumeSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class ClusterVolumeSpecAccessMode
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
    * The set of nodes this volume can be used on at one time.
    - `single` The volume may only be scheduled to one node at a time.
    - `multi` the volume may be scheduled to any supported number of nodes at a time.
    
    *
    * @var string|null
    */
    protected $scope = 'single';
    /**
    * The number and way that different tasks can use this volume
    at one time.
    - `none` The volume may only be used by one task at a time.
    - `readonly` The volume may be used by any number of tasks, but they all must mount the volume as readonly
    - `onewriter` The volume may be used by any number of tasks, but only one may mount it as read/write.
    - `all` The volume may have any number of readers and writers.
    
    *
    * @var string|null
    */
    protected $sharing = 'none';
    /**
    * Options for using this volume as a Mount-type volume.
    
       Either MountVolume or BlockVolume, but not both, must be
       present.
     properties:
       FsType:
         type: "string"
         description: |
           Specifies the filesystem type for the mount volume.
           Optional.
       MountFlags:
         type: "array"
         description: |
           Flags to pass when mounting the volume. Optional.
         items:
           type: "string"
    BlockVolume:
     type: "object"
     description: |
       Options for using this volume as a Block-type volume.
       Intentionally empty.
    
    *
    * @var mixed|null
    */
    protected $mountVolume;
    /**
    * Swarm Secrets that are passed to the CSI storage plugin when
    operating on this volume.
    
    *
    * @var list<ClusterVolumeSpecAccessModeSecretsItem>|null
    */
    protected $secrets;
    /**
    * Requirements for the accessible topology of the volume. These
    fields are optional. For an in-depth description of what these
    fields mean, see the CSI specification.
    
    *
    * @var ClusterVolumeSpecAccessModeAccessibilityRequirements|null
    */
    protected $accessibilityRequirements;
    /**
    * The desired capacity that the volume should be created with. If
    empty, the plugin will decide the capacity.
    
    *
    * @var ClusterVolumeSpecAccessModeCapacityRange|null
    */
    protected $capacityRange;
    /**
    * The availability of the volume for use in tasks.
    - `active` The volume is fully available for scheduling on the cluster
    - `pause` No new workloads should use the volume, but existing workloads are not stopped.
    - `drain` All workloads using this volume should be stopped and rescheduled, and no new ones should be started.
    
    *
    * @var string|null
    */
    protected $availability = 'active';
    /**
    * The set of nodes this volume can be used on at one time.
    - `single` The volume may only be scheduled to one node at a time.
    - `multi` the volume may be scheduled to any supported number of nodes at a time.
    
    *
    * @return string|null
    */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
    * The set of nodes this volume can be used on at one time.
    - `single` The volume may only be scheduled to one node at a time.
    - `multi` the volume may be scheduled to any supported number of nodes at a time.
    
    *
    * @param string|null $scope
    *
    * @return self
    */
    public function setScope(?string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
    * The number and way that different tasks can use this volume
    at one time.
    - `none` The volume may only be used by one task at a time.
    - `readonly` The volume may be used by any number of tasks, but they all must mount the volume as readonly
    - `onewriter` The volume may be used by any number of tasks, but only one may mount it as read/write.
    - `all` The volume may have any number of readers and writers.
    
    *
    * @return string|null
    */
    public function getSharing(): ?string
    {
        return $this->sharing;
    }
    /**
    * The number and way that different tasks can use this volume
    at one time.
    - `none` The volume may only be used by one task at a time.
    - `readonly` The volume may be used by any number of tasks, but they all must mount the volume as readonly
    - `onewriter` The volume may be used by any number of tasks, but only one may mount it as read/write.
    - `all` The volume may have any number of readers and writers.
    
    *
    * @param string|null $sharing
    *
    * @return self
    */
    public function setSharing(?string $sharing): self
    {
        $this->initialized['sharing'] = true;
        $this->sharing = $sharing;
        return $this;
    }
    /**
    * Options for using this volume as a Mount-type volume.
    
       Either MountVolume or BlockVolume, but not both, must be
       present.
     properties:
       FsType:
         type: "string"
         description: |
           Specifies the filesystem type for the mount volume.
           Optional.
       MountFlags:
         type: "array"
         description: |
           Flags to pass when mounting the volume. Optional.
         items:
           type: "string"
    BlockVolume:
     type: "object"
     description: |
       Options for using this volume as a Block-type volume.
       Intentionally empty.
    
    *
    * @return mixed
    */
    public function getMountVolume()
    {
        return $this->mountVolume;
    }
    /**
    * Options for using this volume as a Mount-type volume.
    
       Either MountVolume or BlockVolume, but not both, must be
       present.
     properties:
       FsType:
         type: "string"
         description: |
           Specifies the filesystem type for the mount volume.
           Optional.
       MountFlags:
         type: "array"
         description: |
           Flags to pass when mounting the volume. Optional.
         items:
           type: "string"
    BlockVolume:
     type: "object"
     description: |
       Options for using this volume as a Block-type volume.
       Intentionally empty.
    
    *
    * @param mixed $mountVolume
    *
    * @return self
    */
    public function setMountVolume($mountVolume): self
    {
        $this->initialized['mountVolume'] = true;
        $this->mountVolume = $mountVolume;
        return $this;
    }
    /**
    * Swarm Secrets that are passed to the CSI storage plugin when
    operating on this volume.
    
    *
    * @return list<ClusterVolumeSpecAccessModeSecretsItem>|null
    */
    public function getSecrets(): ?array
    {
        return $this->secrets;
    }
    /**
    * Swarm Secrets that are passed to the CSI storage plugin when
    operating on this volume.
    
    *
    * @param list<ClusterVolumeSpecAccessModeSecretsItem>|null $secrets
    *
    * @return self
    */
    public function setSecrets(?array $secrets): self
    {
        $this->initialized['secrets'] = true;
        $this->secrets = $secrets;
        return $this;
    }
    /**
    * Requirements for the accessible topology of the volume. These
    fields are optional. For an in-depth description of what these
    fields mean, see the CSI specification.
    
    *
    * @return ClusterVolumeSpecAccessModeAccessibilityRequirements|null
    */
    public function getAccessibilityRequirements(): ?ClusterVolumeSpecAccessModeAccessibilityRequirements
    {
        return $this->accessibilityRequirements;
    }
    /**
    * Requirements for the accessible topology of the volume. These
    fields are optional. For an in-depth description of what these
    fields mean, see the CSI specification.
    
    *
    * @param ClusterVolumeSpecAccessModeAccessibilityRequirements|null $accessibilityRequirements
    *
    * @return self
    */
    public function setAccessibilityRequirements(?ClusterVolumeSpecAccessModeAccessibilityRequirements $accessibilityRequirements): self
    {
        $this->initialized['accessibilityRequirements'] = true;
        $this->accessibilityRequirements = $accessibilityRequirements;
        return $this;
    }
    /**
    * The desired capacity that the volume should be created with. If
    empty, the plugin will decide the capacity.
    
    *
    * @return ClusterVolumeSpecAccessModeCapacityRange|null
    */
    public function getCapacityRange(): ?ClusterVolumeSpecAccessModeCapacityRange
    {
        return $this->capacityRange;
    }
    /**
    * The desired capacity that the volume should be created with. If
    empty, the plugin will decide the capacity.
    
    *
    * @param ClusterVolumeSpecAccessModeCapacityRange|null $capacityRange
    *
    * @return self
    */
    public function setCapacityRange(?ClusterVolumeSpecAccessModeCapacityRange $capacityRange): self
    {
        $this->initialized['capacityRange'] = true;
        $this->capacityRange = $capacityRange;
        return $this;
    }
    /**
    * The availability of the volume for use in tasks.
    - `active` The volume is fully available for scheduling on the cluster
    - `pause` No new workloads should use the volume, but existing workloads are not stopped.
    - `drain` All workloads using this volume should be stopped and rescheduled, and no new ones should be started.
    
    *
    * @return string|null
    */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }
    /**
    * The availability of the volume for use in tasks.
    - `active` The volume is fully available for scheduling on the cluster
    - `pause` No new workloads should use the volume, but existing workloads are not stopped.
    - `drain` All workloads using this volume should be stopped and rescheduled, and no new ones should be started.
    
    *
    * @param string|null $availability
    *
    * @return self
    */
    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
}
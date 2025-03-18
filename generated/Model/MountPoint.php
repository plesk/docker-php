<?php

namespace Docker\API\Model;

class MountPoint
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
    * The mount type:
    
    - `bind` a mount of a file or directory from the host into the container.
    - `volume` a docker volume with the given `Name`.
    - `tmpfs` a `tmpfs`.
    - `npipe` a named pipe from the host into the container.
    - `cluster` a Swarm cluster volume
    
    *
    * @var string|null
    */
    protected $type;
    /**
    * Name is the name reference to the underlying data defined by `Source`
    e.g., the volume name.
    
    *
    * @var string|null
    */
    protected $name;
    /**
    * Source location of the mount.
    
    For volumes, this contains the storage location of the volume (within
    `/var/lib/docker/volumes/`). For bind-mounts, and `npipe`, this contains
    the source (host) part of the bind-mount. For `tmpfs` mount points, this
    field is empty.
    
    *
    * @var string|null
    */
    protected $source;
    /**
    * Destination is the path relative to the container root (`/`) where
    the `Source` is mounted inside the container.
    
    *
    * @var string|null
    */
    protected $destination;
    /**
     * Driver is the volume driver used to create the volume (if it is a volume).
     *
     * @var string|null
     */
    protected $driver;
    /**
    * Mode is a comma separated list of options supplied by the user when
    creating the bind/volume mount.
    
    The default is platform-specific (`"z"` on Linux, empty on Windows).
    
    *
    * @var string|null
    */
    protected $mode;
    /**
     * Whether the mount is mounted writable (read-write).
     *
     * @var bool|null
     */
    protected $rW;
    /**
    * Propagation describes how mounts are propagated from the host into the
    mount point, and vice-versa. Refer to the [Linux kernel documentation](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt)
    for details. This field is not used on Windows.
    
    *
    * @var string|null
    */
    protected $propagation;
    /**
    * The mount type:
    
    - `bind` a mount of a file or directory from the host into the container.
    - `volume` a docker volume with the given `Name`.
    - `tmpfs` a `tmpfs`.
    - `npipe` a named pipe from the host into the container.
    - `cluster` a Swarm cluster volume
    
    *
    * @return string|null
    */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
    * The mount type:
    
    - `bind` a mount of a file or directory from the host into the container.
    - `volume` a docker volume with the given `Name`.
    - `tmpfs` a `tmpfs`.
    - `npipe` a named pipe from the host into the container.
    - `cluster` a Swarm cluster volume
    
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
    /**
    * Name is the name reference to the underlying data defined by `Source`
    e.g., the volume name.
    
    *
    * @return string|null
    */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
    * Name is the name reference to the underlying data defined by `Source`
    e.g., the volume name.
    
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
    * Source location of the mount.
    
    For volumes, this contains the storage location of the volume (within
    `/var/lib/docker/volumes/`). For bind-mounts, and `npipe`, this contains
    the source (host) part of the bind-mount. For `tmpfs` mount points, this
    field is empty.
    
    *
    * @return string|null
    */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
    * Source location of the mount.
    
    For volumes, this contains the storage location of the volume (within
    `/var/lib/docker/volumes/`). For bind-mounts, and `npipe`, this contains
    the source (host) part of the bind-mount. For `tmpfs` mount points, this
    field is empty.
    
    *
    * @param string|null $source
    *
    * @return self
    */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
    * Destination is the path relative to the container root (`/`) where
    the `Source` is mounted inside the container.
    
    *
    * @return string|null
    */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
    * Destination is the path relative to the container root (`/`) where
    the `Source` is mounted inside the container.
    
    *
    * @param string|null $destination
    *
    * @return self
    */
    public function setDestination(?string $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * Driver is the volume driver used to create the volume (if it is a volume).
     *
     * @return string|null
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }
    /**
     * Driver is the volume driver used to create the volume (if it is a volume).
     *
     * @param string|null $driver
     *
     * @return self
     */
    public function setDriver(?string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
    * Mode is a comma separated list of options supplied by the user when
    creating the bind/volume mount.
    
    The default is platform-specific (`"z"` on Linux, empty on Windows).
    
    *
    * @return string|null
    */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
    * Mode is a comma separated list of options supplied by the user when
    creating the bind/volume mount.
    
    The default is platform-specific (`"z"` on Linux, empty on Windows).
    
    *
    * @param string|null $mode
    *
    * @return self
    */
    public function setMode(?string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Whether the mount is mounted writable (read-write).
     *
     * @return bool|null
     */
    public function getRW(): ?bool
    {
        return $this->rW;
    }
    /**
     * Whether the mount is mounted writable (read-write).
     *
     * @param bool|null $rW
     *
     * @return self
     */
    public function setRW(?bool $rW): self
    {
        $this->initialized['rW'] = true;
        $this->rW = $rW;
        return $this;
    }
    /**
    * Propagation describes how mounts are propagated from the host into the
    mount point, and vice-versa. Refer to the [Linux kernel documentation](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt)
    for details. This field is not used on Windows.
    
    *
    * @return string|null
    */
    public function getPropagation(): ?string
    {
        return $this->propagation;
    }
    /**
    * Propagation describes how mounts are propagated from the host into the
    mount point, and vice-versa. Refer to the [Linux kernel documentation](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt)
    for details. This field is not used on Windows.
    
    *
    * @param string|null $propagation
    *
    * @return self
    */
    public function setPropagation(?string $propagation): self
    {
        $this->initialized['propagation'] = true;
        $this->propagation = $propagation;
        return $this;
    }
}
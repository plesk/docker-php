<?php

namespace Docker\API\Model;

class Runtime
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
    * Name and, optional, path, of the OCI executable binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
    *
    * @var string|null
    */
    protected $path;
    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @var list<string>|null
     */
    protected $runtimeArgs;
    /**
    * Information specific to the runtime.
    
    While this API specification does not define data provided by runtimes,
    the following well-known properties may be provided by runtimes:
    
    `org.opencontainers.runtime-spec.features`: features structure as defined
    in the [OCI Runtime Specification](https://github.com/opencontainers/runtime-spec/blob/main/features.md),
    in a JSON string representation.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @var array<string, string>|null
    */
    protected $status;
    /**
    * Name and, optional, path, of the OCI executable binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
    *
    * @return string|null
    */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
    * Name and, optional, path, of the OCI executable binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
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
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @return list<string>|null
     */
    public function getRuntimeArgs(): ?array
    {
        return $this->runtimeArgs;
    }
    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @param list<string>|null $runtimeArgs
     *
     * @return self
     */
    public function setRuntimeArgs(?array $runtimeArgs): self
    {
        $this->initialized['runtimeArgs'] = true;
        $this->runtimeArgs = $runtimeArgs;
        return $this;
    }
    /**
    * Information specific to the runtime.
    
    While this API specification does not define data provided by runtimes,
    the following well-known properties may be provided by runtimes:
    
    `org.opencontainers.runtime-spec.features`: features structure as defined
    in the [OCI Runtime Specification](https://github.com/opencontainers/runtime-spec/blob/main/features.md),
    in a JSON string representation.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @return array<string, string>|null
    */
    public function getStatus(): ?iterable
    {
        return $this->status;
    }
    /**
    * Information specific to the runtime.
    
    While this API specification does not define data provided by runtimes,
    the following well-known properties may be provided by runtimes:
    
    `org.opencontainers.runtime-spec.features`: features structure as defined
    in the [OCI Runtime Specification](https://github.com/opencontainers/runtime-spec/blob/main/features.md),
    in a JSON string representation.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @param array<string, string>|null $status
    *
    * @return self
    */
    public function setStatus(?iterable $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}
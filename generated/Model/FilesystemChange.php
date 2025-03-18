<?php

namespace Docker\API\Model;

class FilesystemChange
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
     * Path to file or directory that has changed.
     *
     * @var string|null
     */
    protected $path;
    /**
    * Kind of change
    
    Can be one of:
    
    - `0`: Modified ("C")
    - `1`: Added ("A")
    - `2`: Deleted ("D")
    
    *
    * @var int|null
    */
    protected $kind;
    /**
     * Path to file or directory that has changed.
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * Path to file or directory that has changed.
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
    * Kind of change
    
    Can be one of:
    
    - `0`: Modified ("C")
    - `1`: Added ("A")
    - `2`: Deleted ("D")
    
    *
    * @return int|null
    */
    public function getKind(): ?int
    {
        return $this->kind;
    }
    /**
    * Kind of change
    
    Can be one of:
    
    - `0`: Modified ("C")
    - `1`: Added ("A")
    - `2`: Deleted ("D")
    
    *
    * @param int|null $kind
    *
    * @return self
    */
    public function setKind(?int $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
}
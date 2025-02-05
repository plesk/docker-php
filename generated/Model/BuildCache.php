<?php

namespace Docker\API\Model;

class BuildCache
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
     * Unique ID of the build cache record.
     *
     * @var string|null
     */
    protected $iD;
    /**
    * ID of the parent build cache record.
    
    > **Deprecated**: This field is deprecated, and omitted if empty.
    
    *
    * @var string|null
    */
    protected $parent;
    /**
     * List of parent build cache record IDs.
     *
     * @var list<string>|null
     */
    protected $parents;
    /**
     * Cache record type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Description of the build-step that produced the build cache.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Indicates if the build cache is in use.
     *
     * @var bool|null
     */
    protected $inUse;
    /**
     * Indicates if the build cache is shared.
     *
     * @var bool|null
     */
    protected $shared;
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @var int|null
     */
    protected $size;
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $createdAt;
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $lastUsedAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $usageCount;
    /**
     * Unique ID of the build cache record.
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }
    /**
     * Unique ID of the build cache record.
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
    * ID of the parent build cache record.
    
    > **Deprecated**: This field is deprecated, and omitted if empty.
    
    *
    * @return string|null
    */
    public function getParent(): ?string
    {
        return $this->parent;
    }
    /**
    * ID of the parent build cache record.
    
    > **Deprecated**: This field is deprecated, and omitted if empty.
    
    *
    * @param string|null $parent
    *
    * @return self
    */
    public function setParent(?string $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * List of parent build cache record IDs.
     *
     * @return list<string>|null
     */
    public function getParents(): ?array
    {
        return $this->parents;
    }
    /**
     * List of parent build cache record IDs.
     *
     * @param list<string>|null $parents
     *
     * @return self
     */
    public function setParents(?array $parents): self
    {
        $this->initialized['parents'] = true;
        $this->parents = $parents;
        return $this;
    }
    /**
     * Cache record type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Cache record type.
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
     * Description of the build-step that produced the build cache.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of the build-step that produced the build cache.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Indicates if the build cache is in use.
     *
     * @return bool|null
     */
    public function getInUse(): ?bool
    {
        return $this->inUse;
    }
    /**
     * Indicates if the build cache is in use.
     *
     * @param bool|null $inUse
     *
     * @return self
     */
    public function setInUse(?bool $inUse): self
    {
        $this->initialized['inUse'] = true;
        $this->inUse = $inUse;
        return $this;
    }
    /**
     * Indicates if the build cache is shared.
     *
     * @return bool|null
     */
    public function getShared(): ?bool
    {
        return $this->shared;
    }
    /**
     * Indicates if the build cache is shared.
     *
     * @param bool|null $shared
     *
     * @return self
     */
    public function setShared(?bool $shared): self
    {
        $this->initialized['shared'] = true;
        $this->shared = $shared;
        return $this;
    }
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
    * Date and time at which the build cache was created in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $createdAt
    *
    * @return self
    */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getLastUsedAt(): ?string
    {
        return $this->lastUsedAt;
    }
    /**
    * Date and time at which the build cache was last used in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $lastUsedAt
    *
    * @return self
    */
    public function setLastUsedAt(?string $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }
    /**
     * 
     *
     * @param int|null $usageCount
     *
     * @return self
     */
    public function setUsageCount(?int $usageCount): self
    {
        $this->initialized['usageCount'] = true;
        $this->usageCount = $usageCount;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class ImagesSearchGetResponse200Item
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
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOfficial;
    /**
    * Whether this repository has automated builds enabled.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated and will always be "false".
    
    *
    * @var bool|null
    */
    protected $isAutomated;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $starCount;
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getIsOfficial(): ?bool
    {
        return $this->isOfficial;
    }
    /**
     * 
     *
     * @param bool|null $isOfficial
     *
     * @return self
     */
    public function setIsOfficial(?bool $isOfficial): self
    {
        $this->initialized['isOfficial'] = true;
        $this->isOfficial = $isOfficial;
        return $this;
    }
    /**
    * Whether this repository has automated builds enabled.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated and will always be "false".
    
    *
    * @return bool|null
    */
    public function getIsAutomated(): ?bool
    {
        return $this->isAutomated;
    }
    /**
    * Whether this repository has automated builds enabled.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated and will always be "false".
    
    *
    * @param bool|null $isAutomated
    *
    * @return self
    */
    public function setIsAutomated(?bool $isAutomated): self
    {
        $this->initialized['isAutomated'] = true;
        $this->isAutomated = $isAutomated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getStarCount(): ?int
    {
        return $this->starCount;
    }
    /**
     * 
     *
     * @param int|null $starCount
     *
     * @return self
     */
    public function setStarCount(?int $starCount): self
    {
        $this->initialized['starCount'] = true;
        $this->starCount = $starCount;
        return $this;
    }
}
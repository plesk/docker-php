<?php

namespace Docker\API\Model;

class Image
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
    protected $id;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $repoTags;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $repoDigests;
    /**
     * 
     *
     * @var string|null
     */
    protected $parent;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $container;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var Config|null
     */
    protected $containerConfig;
    /**
     * 
     *
     * @var string|null
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $author;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var Config|null
     */
    protected $config;
    /**
     * 
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * 
     *
     * @var string|null
     */
    protected $os;
    /**
     * 
     *
     * @var int|null
     */
    protected $size;
    /**
     * 
     *
     * @var int|null
     */
    protected $virtualSize;
    /**
     * Information about this container's graph driver.
     *
     * @var GraphDriver|null
     */
    protected $graphDriver;
    /**
     * 
     *
     * @var ImageRootFS|null
     */
    protected $rootFS;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getRepoTags(): ?array
    {
        return $this->repoTags;
    }
    /**
     * 
     *
     * @param list<string>|null $repoTags
     *
     * @return self
     */
    public function setRepoTags(?array $repoTags): self
    {
        $this->initialized['repoTags'] = true;
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getRepoDigests(): ?array
    {
        return $this->repoDigests;
    }
    /**
     * 
     *
     * @param list<string>|null $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(?array $repoDigests): self
    {
        $this->initialized['repoDigests'] = true;
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }
    /**
     * 
     *
     * @param string|null $container
     *
     * @return self
     */
    public function setContainer(?string $container): self
    {
        $this->initialized['container'] = true;
        $this->container = $container;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return Config|null
     */
    public function getContainerConfig(): ?Config
    {
        return $this->containerConfig;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param Config|null $containerConfig
     *
     * @return self
     */
    public function setContainerConfig(?Config $containerConfig): self
    {
        $this->initialized['containerConfig'] = true;
        $this->containerConfig = $containerConfig;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDockerVersion(): ?string
    {
        return $this->dockerVersion;
    }
    /**
     * 
     *
     * @param string|null $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(?string $dockerVersion): self
    {
        $this->initialized['dockerVersion'] = true;
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return Config|null
     */
    public function getConfig(): ?Config
    {
        return $this->config;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param Config|null $config
     *
     * @return self
     */
    public function setConfig(?Config $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }
    /**
     * 
     *
     * @param string|null $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture): self
    {
        $this->initialized['architecture'] = true;
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string|null $os
     *
     * @return self
     */
    public function setOs(?string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getVirtualSize(): ?int
    {
        return $this->virtualSize;
    }
    /**
     * 
     *
     * @param int|null $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(?int $virtualSize): self
    {
        $this->initialized['virtualSize'] = true;
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
     * Information about this container's graph driver.
     *
     * @return GraphDriver|null
     */
    public function getGraphDriver(): ?GraphDriver
    {
        return $this->graphDriver;
    }
    /**
     * Information about this container's graph driver.
     *
     * @param GraphDriver|null $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(?GraphDriver $graphDriver): self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * 
     *
     * @return ImageRootFS|null
     */
    public function getRootFS(): ?ImageRootFS
    {
        return $this->rootFS;
    }
    /**
     * 
     *
     * @param ImageRootFS|null $rootFS
     *
     * @return self
     */
    public function setRootFS(?ImageRootFS $rootFS): self
    {
        $this->initialized['rootFS'] = true;
        $this->rootFS = $rootFS;
        return $this;
    }
}
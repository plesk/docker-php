<?php

namespace Docker\API\Model;

class NodeDescriptionEngine
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
    protected $engineVersion;
    /**
     * 
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * 
     *
     * @var list<NodeDescriptionEnginePluginsItem>|null
     */
    protected $plugins;
    /**
     * 
     *
     * @return string|null
     */
    public function getEngineVersion(): ?string
    {
        return $this->engineVersion;
    }
    /**
     * 
     *
     * @param string|null $engineVersion
     *
     * @return self
     */
    public function setEngineVersion(?string $engineVersion): self
    {
        $this->initialized['engineVersion'] = true;
        $this->engineVersion = $engineVersion;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param array<string, string>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return list<NodeDescriptionEnginePluginsItem>|null
     */
    public function getPlugins(): ?array
    {
        return $this->plugins;
    }
    /**
     * 
     *
     * @param list<NodeDescriptionEnginePluginsItem>|null $plugins
     *
     * @return self
     */
    public function setPlugins(?array $plugins): self
    {
        $this->initialized['plugins'] = true;
        $this->plugins = $plugins;
        return $this;
    }
}
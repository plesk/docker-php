<?php

namespace Docker\API\Model;

class Plugin
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
     * @var string|null
     */
    protected $name;
    /**
     * True when the plugin is running. False when the plugin is not running, only installed.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Settings that can be modified by users.
     *
     * @var PluginSettings|null
     */
    protected $settings;
    /**
     * The config of a plugin.
     *
     * @var PluginConfig|null
     */
    protected $config;
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
     * True when the plugin is running. False when the plugin is not running, only installed.
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * True when the plugin is running. False when the plugin is not running, only installed.
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Settings that can be modified by users.
     *
     * @return PluginSettings|null
     */
    public function getSettings(): ?PluginSettings
    {
        return $this->settings;
    }
    /**
     * Settings that can be modified by users.
     *
     * @param PluginSettings|null $settings
     *
     * @return self
     */
    public function setSettings(?PluginSettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * The config of a plugin.
     *
     * @return PluginConfig|null
     */
    public function getConfig(): ?PluginConfig
    {
        return $this->config;
    }
    /**
     * The config of a plugin.
     *
     * @param PluginConfig|null $config
     *
     * @return self
     */
    public function setConfig(?PluginConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}
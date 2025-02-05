<?php

namespace Docker\API\Model;

class ContainerdInfoNamespaces
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
    * The default containerd namespace used for containers managed
    by the daemon.
    
    The default namespace for containers is "moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @var string|null
    */
    protected $containers = 'moby';
    /**
    * The default containerd namespace used for plugins managed by
    the daemon.
    
    The default namespace for plugins is "plugins.moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @var string|null
    */
    protected $plugins = 'plugins.moby';
    /**
    * The default containerd namespace used for containers managed
    by the daemon.
    
    The default namespace for containers is "moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @return string|null
    */
    public function getContainers(): ?string
    {
        return $this->containers;
    }
    /**
    * The default containerd namespace used for containers managed
    by the daemon.
    
    The default namespace for containers is "moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @param string|null $containers
    *
    * @return self
    */
    public function setContainers(?string $containers): self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
    /**
    * The default containerd namespace used for plugins managed by
    the daemon.
    
    The default namespace for plugins is "plugins.moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @return string|null
    */
    public function getPlugins(): ?string
    {
        return $this->plugins;
    }
    /**
    * The default containerd namespace used for plugins managed by
    the daemon.
    
    The default namespace for plugins is "plugins.moby", but will be
    suffixed with the `<uid>.<gid>` of the remapped `root` if
    user-namespaces are enabled and the containerd image-store
    is used.
    
    *
    * @param string|null $plugins
    *
    * @return self
    */
    public function setPlugins(?string $plugins): self
    {
        $this->initialized['plugins'] = true;
        $this->plugins = $plugins;
        return $this;
    }
}
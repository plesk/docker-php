<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecDNSConfig
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
     * The IP addresses of the name servers.
     *
     * @var list<string>|null
     */
    protected $nameservers;
    /**
     * A search list for host-name lookup.
     *
     * @var list<string>|null
     */
    protected $search;
    /**
     * A list of internal resolver variables to be modified (e.g., `debug`, `ndots:3`, etc.).
     *
     * @var list<string>|null
     */
    protected $options;
    /**
     * The IP addresses of the name servers.
     *
     * @return list<string>|null
     */
    public function getNameservers(): ?array
    {
        return $this->nameservers;
    }
    /**
     * The IP addresses of the name servers.
     *
     * @param list<string>|null $nameservers
     *
     * @return self
     */
    public function setNameservers(?array $nameservers): self
    {
        $this->initialized['nameservers'] = true;
        $this->nameservers = $nameservers;
        return $this;
    }
    /**
     * A search list for host-name lookup.
     *
     * @return list<string>|null
     */
    public function getSearch(): ?array
    {
        return $this->search;
    }
    /**
     * A search list for host-name lookup.
     *
     * @param list<string>|null $search
     *
     * @return self
     */
    public function setSearch(?array $search): self
    {
        $this->initialized['search'] = true;
        $this->search = $search;
        return $this;
    }
    /**
     * A list of internal resolver variables to be modified (e.g., `debug`, `ndots:3`, etc.).
     *
     * @return list<string>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * A list of internal resolver variables to be modified (e.g., `debug`, `ndots:3`, etc.).
     *
     * @param list<string>|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}
<?php

namespace Docker;

use Docker\Manager\{ContainerManager,
    ExecManager,
    ImageManager,
    MiscManager,
    NetworkManager,
    NodeManager,
    ServiceManager,
    SwarmManager,
    TaskManager,
    VolumeManager};
use GuzzleHttp\Psr7\HttpFactory;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Docker\Docker
 */
class Docker
{
    /**
     * @var ContainerManager
     */
    private $containerManager;

    /**
     * @var ImageManager
     */
    private $imageManager;

    /**
     * @var MiscManager
     */
    private $miscManager;

    /**
     * @var VolumeManager
     */
    private $volumeManager;

    /**
     * @var NetworkManager
     */
    private $networkManager;

    /**
     * @var NodeManager
     */
    private $nodeManager;

    /**
     * @var ServiceManager
     */
    private $serviceManager;

    /**
     * @var SwarmManager
     */
    private $swarmManager;

    /**
     * @var TaskManager
     */
    private $taskManager;

    /**
     * @var ExecManager
     */
    private $execManager;

    public function __construct(
        private ?ClientInterface $httpClient = null,
    )
    {
        if ($this->httpClient === null) {
            $this->httpClient = DockerClient::createFromEnv();
        }
    }

    public function getContainerManager(): ContainerManager
    {
        if (null === $this->containerManager) {
            $this->containerManager = new ContainerManager($this->httpClient);
        }

        return $this->containerManager;
    }

    public function getImageManager(): ImageManager
    {
        if (null === $this->imageManager) {
            $this->imageManager = new ImageManager($this->httpClient);
        }

        return $this->imageManager;
    }

    public function getMiscManager(): MiscManager
    {
        if (null === $this->miscManager) {
            $this->miscManager = new MiscManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->miscManager;
    }

    public function getExecManager(): ExecManager
    {
        if (null === $this->execManager) {
            $this->execManager = new ExecManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->execManager;
    }

    public function getVolumeManager(): VolumeManager
    {
        if (null === $this->volumeManager) {
            $this->volumeManager = new VolumeManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->volumeManager;
    }

    public function getNetworkManager(): NetworkManager
    {
        if (null === $this->networkManager) {
            $this->networkManager = new NetworkManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->networkManager;
    }

    public function getNodeManager(): NodeManager
    {
        if (null === $this->nodeManager) {
            $this->nodeManager = new NodeManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->nodeManager;
    }

    public function getServiceManager(): ServiceManager
    {
        if (null === $this->serviceManager) {
            $this->serviceManager = new ServiceManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->serviceManager;
    }

    public function getSwarmManager(): SwarmManager
    {
        if (null === $this->swarmManager) {
            $this->swarmManager = new SwarmManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->swarmManager;
    }

    public function getTaskManager(): TaskManager
    {
        if (null === $this->taskManager) {
            $this->taskManager = new TaskManager($this->httpClient, $this->messageFactory, $this->serializer, $this->streamFactory);
        }

        return $this->taskManager;
    }
}

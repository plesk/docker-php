<?php

namespace Docker;

use Docker\API\Normalizer\NormalizerFactory;
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
use Http\Message\MessageFactory;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Psr\Http\Client\ClientInterface;
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
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

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

    /**
     * @param ClientInterface|null     $httpClient     Http client to use with Docker
     * @param Serializer|null     $serializer     Deserialize docker response into php objects
     * @param HttpFactory|null $messageFactory How to create docker request (in PSR7)
     */
    public function __construct(?ClientInterface $httpClient = null, ?Serializer $serializer = null, ?HttpFactory $messageFactory = null)
    {
        $this->httpClient = $httpClient ?: DockerClient::createFromEnv();

        if ($serializer === null) {
            $serializer = new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(
                        new JsonEncode(),
                        new JsonDecode(),
                        [JsonDecode::ASSOCIATIVE => false],
                    ),
                ]
            );
        }

        if ($messageFactory === null) {
            $messageFactory = new GuzzleMessageFactory();
        }

        $this->serializer = $serializer;
        $this->messageFactory = $messageFactory;
    }

    public function getContainerManager(): ContainerManager
    {
        if (null === $this->containerManager) {
            $this->containerManager = new ContainerManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->containerManager;
    }

    public function getImageManager(): ImageManager
    {
        if (null === $this->imageManager) {
            $this->imageManager = new ImageManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->imageManager;
    }

    public function getMiscManager(): MiscManager
    {
        if (null === $this->miscManager) {
            $this->miscManager = new MiscManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->miscManager;
    }

    public function getExecManager(): ExecManager
    {
        if (null === $this->execManager) {
            $this->execManager = new ExecManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->execManager;
    }

    public function getVolumeManager(): VolumeManager
    {
        if (null === $this->volumeManager) {
            $this->volumeManager = new VolumeManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->volumeManager;
    }

    public function getNetworkManager(): NetworkManager
    {
        if (null === $this->networkManager) {
            $this->networkManager = new NetworkManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->networkManager;
    }

    public function getNodeManager(): NodeManager
    {
        if (null === $this->nodeManager) {
            $this->nodeManager = new NodeManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->nodeManager;
    }

    public function getServiceManager(): ServiceManager
    {
        if (null === $this->serviceManager) {
            $this->serviceManager = new ServiceManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->serviceManager;
    }

    public function getSwarmManager(): SwarmManager
    {
        if (null === $this->swarmManager) {
            $this->swarmManager = new SwarmManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->swarmManager;
    }

    public function getTaskManager(): TaskManager
    {
        if (null === $this->taskManager) {
            $this->taskManager = new TaskManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->taskManager;
    }
}

<?php

namespace Docker\Manager;

use Docker\API\Api\ContainerApi;
use Docker\Stream\AttachWebsocketStream;
use Docker\Stream\DockerRawStream;
use Http\Client\Common\FlexibleHttpClient;
use Psr\Http\Client\ClientInterface;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ContainerManager extends BaseManager
{
    const FETCH_STREAM = 'stream';

    protected ContainerApi $api;

    public function __construct(
        protected ClientInterface $httpClient,
    )
    {
        $this->api = new ContainerApi($this->httpClient);
    }

    /**
     * Attach to the container id.
     *
     * @param string $id         The container id or name
     * @param array  $parameters
     * {
     *     @var string $logs 1/True/true or 0/False/false, return logs. Default false
     *     @var string $stream 1/True/true or 0/False/false, return stream. Default false
     *     @var string $stdin 1/True/true or 0/False/false, if stream=true, attach to stdin. Default false.
     *     @var string $stdout 1/True/true or 0/False/false, if logs=true, return stdout log, if stream=true, attach to stdout. Default false.
     *     @var string $stderr 1/True/true or 0/False/false, if logs=true, return stderr log, if stream=true, attach to stderr. Default false.
     *     @var string $detachKeys Override the key sequence for detaching a container. Format is a single character [a-Z] or ctrl-<value> where <value> is one of: a-z, @, ^, [, , or _.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|DockerRawStream
     */
    public function attach($id, $parameters = [], $fetch = self::FETCH_STREAM)
    {
        $response = $this->api->containerAttach(urlencode($id), $parameters, self::FETCH_RESPONSE);

        if ($response->getStatusCode() == 200 && DockerRawStream::HEADER == $response->getHeaderLine('Content-Type')) {
            if ($fetch == self::FETCH_STREAM) {
                return new DockerRawStream($response->getBody());
            }
        }

        return $response;
    }

    /**
     * Attach to the container id with a websocket.
     *
     * @param string $id         The container id or name
     * @param array  $parameters
     * {
     *     @var string $logs 1/True/true or 0/False/false, return logs. Default false
     *     @var string $stream 1/True/true or 0/False/false, return stream. Default false
     *     @var string $stdin 1/True/true or 0/False/false, if stream=true, attach to stdin. Default false.
     *     @var string $stdout 1/True/true or 0/False/false, if logs=true, return stdout log, if stream=true, attach to stdout. Default false.
     *     @var string $stderr 1/True/true or 0/False/false, if logs=true, return stderr log, if stream=true, attach to stderr. Default false.
     *     @var string $detachKeys Override the key sequence for detaching a container. Format is a single character [a-Z] or ctrl-<value> where <value> is one of: a-z, @, ^, [, , or _.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|AttachWebsocketStream
     */
    public function attachWebsocket($id, $parameters = [], $fetch = self::FETCH_STREAM)
    {
        $response = $this->api->executeEndpoint(new class (urlencode($id), $parameters) extends \Docker\API\Endpoint\ContainerAttachWebsocket {
            public function getExtraHeaders(): array
            {
                return array_merge(parent::getExtraHeaders(), [
                    'Host' => 'localhost',
                    'Origin' => 'php://docker-php',
                    'Upgrade' => 'websocket',
                    'Connection' => 'Upgrade',
                    'Sec-WebSocket-Version' => '13',
                    'Sec-WebSocket-Key' => base64_encode(uniqid()),
                ]);
            }
        }, self::FETCH_RESPONSE);

        if ($response->getStatusCode() == 101) {
            if ($fetch == self::FETCH_STREAM) {
                return new AttachWebsocketStream($response->getBody());
            }
        }

        return $response;
    }

    /**
     * @inheritDoc
     *
     * @return \Psr\Http\Message\ResponseInterface|DockerRawStream|string[][]
     */
    public function logs($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $response = $this->api->containerLogs(urlencode($id), $parameters, self::FETCH_RESPONSE);

        if ($response->getStatusCode() == 200) {
            if ($fetch == self::FETCH_STREAM) {
                return new DockerRawStream($response->getBody());
            }

            if ($fetch == self::FETCH_OBJECT) {
                $dockerRawStream = new DockerRawStream($response->getBody());

                $logs = [
                    'stdout' => [],
                    'stderr' => []
                ];

                $dockerRawStream->onStdout(function ($logLine) use (&$logs) {
                    $logs['stdout'][] = $logLine;
                });
                $dockerRawStream->onStderr(function ($logLine) use (&$logs) {
                    $logs['stderr'][] = $logLine;
                });

                $dockerRawStream->wait();

                return $logs;
            }
        }

        return $response;
    }

    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerList($parameters, $fetch);
    }

    public function create(\Docker\API\Model\ContainersCreatePostBody $container, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerCreate($container, $parameters, $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerInspect(urlencode($id), $parameters, $fetch);
    }

    public function listProcesses($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerTop(urlencode($id), $parameters, $fetch);
    }

    public function changes($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerChanges(urlencode($id), $fetch);
    }

    public function export($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerExport(urlencode($id), $fetch);
    }

    public function stats($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerStats(urlencode($id), $parameters, $fetch);
    }

    public function resize($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerResize(urlencode($id), $parameters, $fetch);
    }

    public function start($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerStart(urlencode($id), $parameters, $fetch);
    }

    public function stop($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerStop(urlencode($id), $parameters, $fetch);
    }

    public function restart($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerRestart(urlencode($id), $parameters, $fetch);
    }

    public function kill($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerKill(urlencode($id), $parameters, $fetch);
    }

    public function update($id, \Docker\API\Model\ContainersIdUpdatePostBody $resourceConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerUpdate(urlencode($id), $resourceConfig, $fetch);
    }

    public function rename($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerRename(urlencode($id), $parameters, $fetch);
    }

    public function pause($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerPause(urlencode($id), $fetch);
    }

    public function unpause($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerUnpause(urlencode($id), $fetch);
    }

    public function wait($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerWait(urlencode($id), $parameters, $fetch);
    }

    public function remove($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerDelete(urlencode($id), $parameters, $fetch);
    }

    public function getArchive($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerArchive(urlencode($id), $parameters, $fetch);
    }

    public function getArchiveInformation($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerArchiveInfo(urlencode($id), $parameters, $fetch);
    }

    public function putArchive($id, $inputStream, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->putContainerArchive(urlencode($id), $inputStream, $parameters, $fetch);
    }
}

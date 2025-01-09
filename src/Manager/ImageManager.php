<?php

namespace Docker\Manager;

use Docker\API\Model\BuildInfo;
use Docker\API\Model\CreateImageInfo;
use Docker\API\Model\PushImageInfo;
use Docker\Stream\BuildStream;
use Docker\Stream\CreateImageStream;
use Docker\Stream\PushStream;
use Docker\Stream\TarStream;
use Psr\Http\Message\StreamInterface;

class ImageManager extends BaseManager
{
    const FETCH_STREAM = 'stream';
    /**
     * Build an image from Dockerfile via stdin.
     *
     * @param BaseManager|StreamInterface|string $inputStream The input stream (encoded with tar) containing the Dockerfile
     * *                                                     and other files for the image.
     * @param array  $parameters
     * {
     *     @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|BuildInfo[]|BuildStream
     *@var string $dockerfile Path within the build context to the Dockerfile. This is ignored if remote is specified and points to an individual filename.
     *     @var string $t A repository name (and optionally a tag) to apply to the resulting image in case of success.
     *     @var string $remote A Git repository URI or HTTP/HTTPS URI build source. If the URI specifies a filename, the file’s contents are placed into a file called Dockerfile.
     *     @var bool $q Suppress verbose build output.
     *     @var bool $nocache Do not use the cache when building the image.
     *     @var string $pull Attempt to pull the image even if an older image exists locally
     *     @var bool $rm Remove intermediate containers after a successful build (default behavior).
     *     @var bool $forcerm always remove intermediate containers (includes rm)
     *     @var int $memory Set memory limit for build.
     *     @var int $memswap Total memory (memory + swap), -1 to disable swap.
     *     @var int $cpushares CPU shares (relative weight).
     *     @var string $cpusetcpus CPUs in which to allow execution (e.g., 0-3, 0,1).
     *     @var int $cpuperiod The length of a CPU period in microseconds.
     *     @var int $cpuquota Microseconds of CPU time that the container can get in a CPU period.
     *     @var int $buildargs Total memory (memory + swap), -1 to disable swap.
     *     @var string $Content-type  Set to 'application/tar'.
     *     @var string $X-Registry-Config A base64-url-safe-encoded Registry Auth Config JSON object
     * }
     *
     */
    public function build($inputStream, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        if (is_resource($inputStream)) {
            $inputStream = new TarStream($inputStream);
        }

        $response = $this->api->imageBuild($inputStream, $parameters, [], self::FETCH_RESPONSE);

        if (200 === $response->getStatusCode()) {
            if (self::FETCH_STREAM === $fetch) {
                return new BuildStream($response->getBody(), $this->serializer);
            }

            if (self::FETCH_OBJECT === $fetch) {
                $buildInfoList = [];

                $stream = new BuildStream($response->getBody(), $this->serializer);
                $stream->onFrame(function (BuildInfo $buildInfo) use (&$buildInfoList) {
                    $buildInfoList[] = $buildInfo;
                });
                $stream->wait();

                return $buildInfoList;
            }
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Psr\Http\Message\ResponseInterface|CreateImageInfo[]|CreateImageStream
     */
    public function create($inputStream = null, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $headerParameters = [];
        $this->extractRegistryAuth($parameters, $headerParameters);

        $response = $this->api->imageCreate($inputStream ?? '', $parameters, $headerParameters, self::FETCH_RESPONSE);

        if (200 === $response->getStatusCode()) {
            if (self::FETCH_STREAM === $fetch) {
                return new CreateImageStream($response->getBody(), $this->serializer);
            }

            if (self::FETCH_OBJECT === $fetch) {
                $createImageInfoList = [];

                $stream = new CreateImageStream($response->getBody(), $this->serializer);
                $stream->onFrame(function (CreateImageInfo $createImageInfo) use (&$createImageInfoList) {
                    $createImageInfoList[] = $createImageInfo;
                });
                $stream->wait();

                return $createImageInfoList;
            }
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Psr\Http\Message\ResponseInterface|PushImageInfo[]|PushStream
     */
    public function push($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $headerParameters = [];
        $this->extractRegistryAuth($parameters, $headerParameters);

        $response = $this->api->imagePush(urlencode($name), $parameters, $headerParameters, self::FETCH_RESPONSE);

        if (200 === $response->getStatusCode()) {
            if (self::FETCH_STREAM === $fetch) {
                return new PushStream($response->getBody(), $this->serializer);
            }

            if (self::FETCH_OBJECT === $fetch) {
                $pushImageInfoList = [];

                $stream = new PushStream($response->getBody(), $this->serializer);
                $stream->onFrame(function (PushImageInfo $pushImageInfo) use (&$pushImageInfoList) {
                    $pushImageInfoList[] = $pushImageInfo;
                });
                $stream->wait();

                return $pushImageInfoList;
            }
        }

        return $response;
    }

    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageList($parameters, $fetch);
    }

    public function find($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageInspect(urlencode($name), $fetch);
    }

    public function history($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageHistory(urlencode($name), $fetch);
    }

    public function tag($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageTag(urlencode($name), $parameters, $fetch);
    }

    public function remove($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageDelete(urlencode($name), $parameters, $fetch);
    }

    public function search($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageSearch($parameters, $fetch);
    }

    public function commit(\Docker\API\Model\Config $containerConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageCommit($containerConfig, $parameters, $fetch);
    }

    public function save($name, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageGet(urlencode($name), $fetch);
    }

    public function saveAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageGetAll($parameters, $fetch);
    }

    public function load($imagesTarball, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->imageLoad($imagesTarball, $parameters, $fetch);
    }
}

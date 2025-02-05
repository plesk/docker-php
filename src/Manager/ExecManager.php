<?php

namespace Docker\Manager;

use Docker\Stream\DockerRawStream;

class ExecManager extends BaseManager
{
    const FETCH_STREAM = 'stream';

    public function start($id, \Docker\API\Model\ExecIdStartPostBody $execStartConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $response = $this->api->execStart(urlencode($id), $execStartConfig, self::FETCH_RESPONSE);

        if ($response->getStatusCode() == 200 && DockerRawStream::HEADER == $response->getHeaderLine('Content-Type')) {
            if ($fetch == self::FETCH_STREAM) {
                return new DockerRawStream($response->getBody());
            }
        }

        return $response;
    }

    public function create($id, \Docker\API\Model\ContainersIdExecPostBody $execConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->containerExec(urlencode($id), $execConfig, $fetch);
    }

    public function resize($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->execResize(urlencode($id), $parameters, $fetch);
    }

    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->execInspect(urlencode($id), $fetch);
    }
}

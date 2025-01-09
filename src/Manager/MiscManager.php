<?php

namespace Docker\Manager;

use Docker\API\Model\EventsGetResponse200;
use Docker\Stream\EventStream;

class MiscManager extends BaseManager
{
    const FETCH_STREAM = 'stream';

    /**
     * {@inheritdoc}
     */
    public function getEvents($parameters = [], $fetch = self::FETCH_OBJECT): EventStream|array|\Psr\Http\Message\ResponseInterface
    {
        if (isset($parameters['since'])) {
            $parameters['since'] = (string) $parameters['since'];
        }
        if (isset($parameters['until'])) {
            $parameters['until'] = (string) $parameters['until'];
        }
        $response = $this->api->systemEvents($parameters, self::FETCH_RESPONSE);

        if (200 === $response->getStatusCode()) {
            if (self::FETCH_STREAM === $fetch) {
                return new EventStream($response->getBody(), $this->serializer);
            }

            if (self::FETCH_OBJECT === $fetch) {
                $eventList = [];

                $stream = new EventStream($response->getBody(), $this->serializer);
                $stream->onFrame(function (EventsGetResponse200 $event) use (&$eventList) {
                    $eventList[] = $event;
                });
                $stream->wait();

                return $eventList;
            }
        }

        return $response;
    }

    public function checkAuthentication(\Docker\API\Model\AuthConfig $authConfig, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->systemAuth($authConfig, $fetch);
    }

    public function getSystemInformation($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->systemInfo($fetch);
    }

    public function getVersion($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->systemVersion($fetch);
    }

    public function ping($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return $this->api->systemPing($fetch);
    }
}

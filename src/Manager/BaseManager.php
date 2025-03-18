<?php
namespace Docker\Manager;

use Docker\API\Client;
use Docker\API\Model\AuthConfig;
use Http\Client\Common\FlexibleHttpClient;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class BaseManager
{
    const FETCH_RESPONSE = Client::FETCH_RESPONSE;
    const FETCH_OBJECT = Client::FETCH_OBJECT;
    const FETCH_PROMISE = 'promise';

    protected Client $api;

    public function __construct(
        protected ClientInterface $httpClient,
        protected RequestFactoryInterface $messageFactory,
        protected SerializerInterface $serializer,
        protected StreamFactoryInterface $streamFactory,
    )
    {
        $this->httpClient = new FlexibleHttpClient($httpClient);
        $this->api = new Client(
            $this->httpClient,
            $this->messageFactory,
            $this->serializer,
            $this->streamFactory,
        );
    }

    protected function extractRegistryAuth(array &$parameters, array &$headerParameters): void
    {
        if (isset($parameters['X-Registry-Auth'])) {
            if ($parameters['X-Registry-Auth'] instanceof AuthConfig) {
                $parameters['X-Registry-Auth'] = base64_encode($this->serializer->serialize($parameters['X-Registry-Auth'], 'json'));
            }
            $headerParameters['X-Registry-Auth'] = $parameters['X-Registry-Auth'];
            unset($parameters['X-Registry-Auth']);
        }
    }
}

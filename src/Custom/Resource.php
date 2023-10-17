<?php
namespace Docker\Custom;

use Http\Client\Common\FlexibleHttpClient;
use Http\Message\MessageFactory;
use Psr\Http\Client\ClientInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Resource
{
    const FETCH_RESPONSE = 'response';
    const FETCH_OBJECT = 'object';
    const FETCH_PROMISE = 'promise';

    protected ClientInterface $httpClient;

    protected MessageFactory $messageFactory;

    protected SerializerInterface $serializer;

    public function __construct(ClientInterface $httpClient, MessageFactory $messageFactory, SerializerInterface $serializer)
    {
        $this->httpClient = new FlexibleHttpClient($httpClient);
        $this->messageFactory = $messageFactory;
        $this->serializer = $serializer;
    }
}
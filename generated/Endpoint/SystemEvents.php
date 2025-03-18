<?php

namespace Docker\API\Endpoint;

class SystemEvents extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    /**
    * Stream real-time events from the server.
    
    Various objects within Docker report events when something happens to them.
    
    Containers report these events: `attach, commit, copy, create, destroy, detach, die, exec_create, exec_detach, exec_start, export, kill, oom, pause, rename, resize, restart, start, stop, top, unpause, update`
    
    Images report these events: `delete, import, load, pull, push, save, tag, untag`
    
    Volumes report these events: `create, mount, unmount, destroy`
    
    Networks report these events: `create, connect, disconnect, destroy`
    
    The Docker daemon reports these events: `reload`
    
    *
    * @param array $queryParameters {
    *     @var string $since Show events created since this timestamp then stream new events.
    *     @var string $until Show events created until this timestamp then stop streaming.
    *     @var string $filters A JSON encoded value of filters (a `map[string][]string`) to process on the event list. Available filters:
    
    - `container=<string>` container name or ID
    - `event=<string>` event type
    - `image=<string>` image name or ID
    - `label=<string>` image or container label
    - `type=<string>` object to filter by, one of `container`, `image`, `volume`, `network`, or `daemon`
    - `volume=<string>` volume name or ID
    - `network=<string>` network name or ID
    - `daemon=<string>` daemon name or ID
    
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/events';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['since', 'until', 'filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('since', ['string']);
        $optionsResolver->addAllowedTypes('until', ['string']);
        $optionsResolver->addAllowedTypes('filters', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\SystemEventsInternalServerErrorException
     *
     * @return null|\Docker\API\Model\EventsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\API\Model\EventsGetResponse200', 'json');
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\SystemEventsInternalServerErrorException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
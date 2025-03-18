<?php

namespace Docker\API\Endpoint;

class ContainerList extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var bool $all Return all containers. By default, only running containers are shown
    *     @var int $limit Return this number of most recently created containers, including non-running ones.
    *     @var bool $size Return the size of container as fields `SizeRw` and `SizeRootFs`.
    *     @var string $filters Filters to process on the container list, encoded as JSON (a `map[string][]string`). For example, `{"status": ["paused"]}` will only return paused containers.
    
    Available filters:
    - `exited=<int>` containers with exit code of `<int>`
    - `status=`(`created`|`restarting`|`running`|`removing`|`paused`|`exited`|`dead`)
    - `label=key` or `label="key=value"` of a container label
    - `isolation=`(`default`|`process`|`hyperv`) (Windows daemon only)
    - `id=<ID>` a container's ID
    - `name=<name>` a container's name
    - `is-task=`(`true`|`false`)
    - `ancestor`=(`<image-name>[:<tag>]`, `<image id>`, or `<image@digest>`)
    - `before`=(`<container id>` or `<container name>`)
    - `since`=(`<container id>` or `<container name>`)
    - `volume`=(`<volume name>` or `<mount point destination>`)
    - `network`=(`<network id>` or `<network name>`)
    - `health`=(`starting`|`healthy`|`unhealthy`|`none`)
    
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
        return '/containers/json';
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
        $optionsResolver->setDefined(['all', 'limit', 'size', 'filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['all' => false, 'size' => false]);
        $optionsResolver->addAllowedTypes('all', ['bool']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('size', ['bool']);
        $optionsResolver->addAllowedTypes('filters', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerListBadRequestException
     * @throws \Docker\API\Exception\ContainerListInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainerSummaryItem[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\API\Model\ContainerSummaryItem[]', 'json');
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\ContainerListBadRequestException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerListInternalServerErrorException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
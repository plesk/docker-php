<?php

namespace Docker\API\Endpoint;

class ServiceInspect extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param array $queryParameters {
     *     @var bool $insertDefaults Fill empty fields with default values.
     * }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/{id}');
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
        $optionsResolver->setDefined(['insertDefaults']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['insertDefaults' => false]);
        $optionsResolver->addAllowedTypes('insertDefaults', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ServiceInspectNotFoundException
     * @throws \Docker\API\Exception\ServiceInspectInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Service
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\API\Model\Service', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ServiceInspectNotFoundException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ServiceInspectInternalServerErrorException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\API\Exception\ServiceInspectServiceUnavailableException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
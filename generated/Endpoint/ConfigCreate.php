<?php

namespace Docker\API\Endpoint;

class ConfigCreate extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Docker\API\Model\ConfigsCreatePostBody $body 
     */
    public function __construct(\Docker\API\Model\ConfigsCreatePostBody $body)
    {
        $this->body = $body;
    }
    use \Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/configs/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ConfigCreateConflictException
     * @throws \Docker\API\Exception\ConfigCreateInternalServerErrorException
     * @throws \Docker\API\Exception\ConfigCreateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\IdResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\API\Model\IdResponse', 'json');
        }
        if (409 === $status) {
            throw new \Docker\API\Exception\ConfigCreateConflictException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ConfigCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\API\Exception\ConfigCreateServiceUnavailableException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
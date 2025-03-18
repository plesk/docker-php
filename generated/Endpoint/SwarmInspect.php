<?php

namespace Docker\API\Endpoint;

class SwarmInspect extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    use \Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/swarm';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\SwarmInspectNotFoundException
     * @throws \Docker\API\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Swarm
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\API\Model\Swarm', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\SwarmInspectNotFoundException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\SwarmInspectInternalServerErrorException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\API\Exception\SwarmInspectServiceUnavailableException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
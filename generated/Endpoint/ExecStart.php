<?php

namespace Docker\API\Endpoint;

class ExecStart extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Starts a previously set up exec instance. If detach is true, this endpoint
    returns immediately after starting the command. Otherwise, it sets up an
    interactive session with the command.
    
    *
    * @param string $id Exec instance ID
    * @param \Docker\API\Model\ExecIdStartPostBody $execStartConfig 
    */
    public function __construct(string $id, \Docker\API\Model\ExecIdStartPostBody $execStartConfig)
    {
        $this->id = $id;
        $this->body = $execStartConfig;
    }
    use \Docker\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/exec/{id}/start');
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
     * @throws \Docker\API\Exception\ExecStartNotFoundException
     * @throws \Docker\API\Exception\ExecStartConflictException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ExecStartNotFoundException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \Docker\API\Exception\ExecStartConflictException($serializer->deserialize($body, 'Docker\API\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
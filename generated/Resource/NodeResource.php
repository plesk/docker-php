<?php

namespace Docker\API\Resource;

use Docker\Custom\QueryParam;
use Docker\Custom\Resource;

class NodeResource extends Resource
{
    /**
     * List nodes.
     *
     * @param array $parameters {
     *
     *     @var array $filters A JSON encoded value of the filters (a map[string][]string) to process on the nodes list.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\Node[]
     */
    public function findAll($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', null);
        $url     = '/nodes';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\Node[]', 'json');
            }
        }

        return $response;
    }

    /**
     * Return low-level information on the node id.
     *
     * @param string $id         Node id or name
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\Node
     */
    public function find($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/nodes/{id}';
        $url        = str_replace('{id}', urlencode($id), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\Node', 'json');
            }
        }

        return $response;
    }
}

<?php
namespace Docker;

use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\Plugin\{
    AddHostPlugin,
    ContentLengthPlugin,
    DecoderPlugin,
    ErrorPlugin
};
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Http\Client\Common\PluginClient;
use Docker\SocketClient\Client as SocketHttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Client\ClientInterface;

class DockerClient implements ClientInterface
{
    private ClientInterface $httpClient;

    public function __construct($socketClientOptions = [])
    {
        $socketClient = new SocketHttpClient(new GuzzleMessageFactory(), $socketClientOptions);
        $host = preg_match('/unix:\/\//', $socketClientOptions['remote_socket']) ? 'http://localhost' : $socketClientOptions['remote_socket'];

        $this->httpClient = new PluginClient($socketClient, [
            new ErrorPlugin(),
            new ContentLengthPlugin(),
            new DecoderPlugin(),
            new AddHostPlugin(new Uri($host)),
        ]);
    }

    /**
     * (@inheritdoc}
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }

    /**
     * @return DockerClient
     */
    public static function create(): DockerClient
    {
        return new self([
            'remote_socket' => 'unix:///var/run/docker.sock'
        ]);
    }

    /**
     * Create a docker client from environment variables
     *
     * @return DockerClient
     *
     * @throws \RuntimeException Throw exception when invalid environment variables are given
     */
    public static function createFromEnv(): DockerClient
    {
        $options = [
            'remote_socket' => getenv('DOCKER_HOST') ? getenv('DOCKER_HOST') : 'unix:///var/run/docker.sock'
        ];

        if (getenv('DOCKER_TLS_VERIFY') && getenv('DOCKER_TLS_VERIFY') == 1) {
            if (!getenv('DOCKER_CERT_PATH')) {
                throw new \RuntimeException('Connection to docker has been set to use TLS, but no PATH is defined for certificate in DOCKER_CERT_PATH docker environnement variable');
            }

            $cafile = getenv('DOCKER_CERT_PATH').DIRECTORY_SEPARATOR.'ca.pem';
            $certfile = getenv('DOCKER_CERT_PATH').DIRECTORY_SEPARATOR.'cert.pem';
            $keyfile = getenv('DOCKER_CERT_PATH').DIRECTORY_SEPARATOR.'key.pem';

            $stream_context = [
                'cafile'        => $cafile,
                'local_cert'    => $certfile,
                'local_pk'      => $keyfile,
            ];

            if (getenv('DOCKER_PEER_NAME')) {
                $stream_context['peer_name'] = getenv('DOCKER_PEER_NAME');
            }

            $options['ssl'] = true;
            $options['stream_context_options'] = [
                'ssl' =>  $stream_context
            ];
        }

        return new self($options);
    }
}

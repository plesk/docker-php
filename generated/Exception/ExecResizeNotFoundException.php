<?php

namespace Docker\API\Exception;

class ExecResizeNotFoundException extends NotFoundException
{
    /**
     * @var \Docker\API\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No such exec instance');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse(): \Docker\API\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
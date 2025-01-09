<?php

namespace Docker\API\Exception;

class NotAcceptableException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 406);
    }
}
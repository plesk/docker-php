<?php

namespace Docker\SocketClient\Exception;

use Http\Client\Exception\NetworkException;

class BrokenPipeException extends NetworkException
{
}

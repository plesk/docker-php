<?php

namespace Docker\SocketClient;

use Docker\SocketClient\Exception\StreamException;
use Docker\SocketClient\Exception\TimeoutException;
use Psr\Http\Message\StreamInterface;

/**
 * Stream implementation for Socket Client.
 *
 * This implementation is used to have a Stream which react better to the Socket Client behavior.
 *
 * The main advantage is you can get the response of a request even if it's not finish, the response is available
 * as soon as all headers are received, this stream will have the remaining socket used for the request / response
 * call.
 *
 * It is only readable once, if you want to read the content multiple times, you can store contents of this
 * stream into a variable or encapsulate it in a buffered stream.
 *
 * Writing and seeking is disable to avoid weird behaviors.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
class Stream implements StreamInterface
{
    /** @var resource Underlying socket */
    private $socket;

    /**
     * @var bool Is stream detached
     */
    private bool $isDetached = false;

    /**
     * @var int|null Size of the stream, so we know what we must read, null if not available (i.e. a chunked stream)
     */
    private $size;

    /**
     * @var int Size of the stream readed, to avoid reading more than available and have the user blocked
     */
    private $readed = 0;

    /**
     * Create the stream.
     *
     * @param resource $socket
     * @param int      $size
     */
    public function __construct($socket, int $size = null)
    {
        $this->socket = $socket;
        $this->size = $size;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        try {
            return $this->getContents();
        } catch (\Exception $e) {
            return '';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function close(): void
    {
        fclose($this->socket);
    }

    /**
     * {@inheritdoc}
     */
    public function detach()
    {
        $this->isDetached = true;
        $socket = $this->socket;
        $this->socket = null;

        return $socket;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function tell(): int
    {
        return ftell($this->socket);
    }

    /**
     * {@inheritdoc}
     */
    public function eof(): bool
    {
        return feof($this->socket);
    }

    /**
     * {@inheritdoc}
     */
    public function isSeekable(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function seek($offset, $whence = SEEK_SET): void
    {
        throw new StreamException('This stream is not seekable');
    }

    /**
     * {@inheritdoc}
     */
    public function rewind(): void
    {
        throw new StreamException('This stream is not seekable');
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function write($string): int
    {
        throw new StreamException('This stream is not writable');
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function read($length): string
    {
        if (null === $this->getSize()) {
            return fread($this->socket, $length);
        }

        if ($this->getSize() === $this->readed) {
            return '';
        }

        // Even if we request a length a non blocking stream can return less data than asked
        $read = fread($this->socket, $length);

        if ($this->getMetadata('timed_out')) {
            throw new TimeoutException('Stream timed out while reading data');
        }

        $this->readed += strlen($read);

        return $read;
    }

    /**
     * {@inheritdoc}
     */
    public function getContents(): string
    {
        if (null === $this->getSize()) {
            return stream_get_contents($this->socket);
        }

        $contents = '';

        do {
            $contents .= $this->read($this->getSize() - $this->readed);
        } while ($this->readed < $this->getSize());

        return $contents;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($key = null)
    {
        $meta = stream_get_meta_data($this->socket);

        if (null === $key) {
            return $meta;
        }

        return $meta[$key];
    }
}

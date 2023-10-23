<?php

namespace Docker\Context;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Docker\Context\Context
 */
class Context implements ContextInterface
{
    const FORMAT_STREAM = 'stream';

    const FORMAT_TAR = 'tar';

    /**
     * @var string
     */
    private string $directory;

    /**
     * @var process Tar process
     */
    private $process;

    /**
     * @var resource Tar stream
     */
    private $stream;

    /**
     * @var string Format of the context (stream or tar)
     */
    private string $format = self::FORMAT_STREAM;

    /**
     * @param string     $directory Directory of context
     * @param string     $format    Format to use when sending the call (stream or tar: string)
     */
    public function __construct(string $directory, string $format = self::FORMAT_STREAM)
    {
        $this->directory = $directory;
        $this->format = $format;
    }

    /**
     * Get directory of Context
     *
     * @return string
     */
    public function getDirectory(): string
    {
        return $this->directory;
    }

    /**
     * Set directory of Context
     *
     * @param string $directory Targeted directory
     */
    public function setDirectory(string $directory): void
    {
        $this->directory = $directory;
    }

    /**
     * Return content of Dockerfile of this context
     *
     * @return string Content of dockerfile
     */
    public function getDockerfileContent(): string
    {
        return file_get_contents($this->directory.DIRECTORY_SEPARATOR.'Dockerfile');
    }

    /**
     * @return boolean
     */
    public function isStreamed(): bool
    {
        return $this->format === self::FORMAT_STREAM;
    }

    /**
     * @return resource|string
     */
    public function read()
    {
        return $this->isStreamed() ? $this->toStream() : $this->toTar();
    }

    /**
     * Return the context as a tar archive
     *
     * @throws \Symfony\Component\Process\Exception\ProcessFailedException
     *
     * @return string Tar content
     */
    public function toTar(): string
    {
        $process = new Process('/usr/bin/env tar c .', $this->directory);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $process->getOutput();
    }

    /**
     * Return a stream for this context
     *
     * @return resource Stream resource in memory
     */
    public function toStream()
    {
        if (!is_resource($this->process)) {
            $this->process = proc_open("/usr/bin/env tar c .", [["pipe", "r"], ["pipe", "w"], ["pipe", "w"]], $pipes, $this->directory);
            $this->stream  = $pipes[1];
        }

        return $this->stream;
    }

    public function __destruct()
    {
        if (is_resource($this->process)) {
            proc_close($this->process);
        }

        if (is_resource($this->stream)) {
            fclose($this->stream);
        }
    }
}

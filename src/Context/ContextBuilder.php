<?php

namespace Docker\Context;

use Symfony\Component\Filesystem\Filesystem;

class ContextBuilder
{
    /**
     * @var string
     */
    private string $directory;

    /**
     * @var string
     */
    private string $from = 'base';

    /**
     * @var array
     */
    private array $commands = [];

    /**
     * @var array
     */
    private array $files = [];

    /**
     * @var \Symfony\Component\Filesystem\Filesystem
     */
    private \Symfony\Component\Filesystem\Filesystem $fs;

    /**
     * @var string
     */
    private string $format;

    /**
     * @var string
     */
    private string $command;

    /**
     * @var string
     */
    private string $entrypoint;

    /**
     * @param \Symfony\Component\Filesystem\Filesystem
     */
    public function __construct(Filesystem $fs = null)
    {
        $this->fs = $fs ?: new Filesystem();
        $this->format = Context::FORMAT_STREAM;
    }

    /**
     * Sets the format of the Context output
     *
     * @param string $format
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function setFormat(string $format): ContextBuilder
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Set the FROM instruction of Dockerfile
     *
     * @param string $from From which image we start
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function from(string $from): ContextBuilder
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Set the CMD instruction in the Dockerfile
     *
     * @param string $command Command to execute
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function command(string $command): ContextBuilder
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Set the ENTRYPOINT instruction in the Dockerfile
     *
     * @param string $entrypoint The entrypoint
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function entrypoint(string $entrypoint): ContextBuilder
    {
        $this->entrypoint = $entrypoint;

        return $this;
    }

    /**
     * Add a ADD instruction to Dockerfile
     *
     * @param string $path    Path wanted on the image
     * @param string $content Content of file
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function add($path, $content): ContextBuilder
    {
        $this->commands[] = ['type' => 'ADD', 'path' => $path, 'content' => $content];

        return $this;
    }

    /**
     * Add a RUN instruction to Dockerfile
     *
     * @param string $command Command to run
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function run($command): ContextBuilder
    {
        $this->commands[] = ['type' => 'RUN', 'command' => $command];

        return $this;
    }

    /**
     * Add a ENV instruction to Dockerfile
     *
     * @param string $name Name of the environment variable
     * @param string $value Value of the environment variable
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function env(string $name, string $value): ContextBuilder
    {
        $this->commands[] = ['type' => 'ENV', 'name' => $name, 'value' => $value];

        return $this;
    }

    /**
     * Add a COPY instruction to Dockerfile
     *
     * @param string $from Path of folder or file to copy
     * @param string $to Path of destination
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function copy(string $from, string $to): ContextBuilder
    {
        $this->commands[] = ['type' => 'COPY', 'from' => $from, 'to' => $to];

        return $this;
    }

    /**
     * Add a WORKDIR instruction to Dockerfile
     *
     * @param string $workdir Working directory
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function workdir(string $workdir): ContextBuilder
    {
        $this->commands[] = ['type' => 'WORKDIR', 'workdir' => $workdir];

        return $this;
    }

    /**
     * Add a EXPOSE instruction to Dockerfile
     *
     * @param int $port Port to expose
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function expose(int $port): ContextBuilder
    {
        $this->commands[] = ['type' => 'EXPOSE', 'port' => $port];

        return $this;
    }

    /**
     * Adds an USER instruction to the Dockerfile
     *
     * @param string $user User to switch to
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function user(string $user): ContextBuilder
    {
        $this->commands[] = ['type' => 'USER', 'user' => $user];

        return $this;
    }

    /**
     * Adds a VOLUME instruction to the Dockerfile
     *
     * @param string $volume Volume path to add
     *
     * @return \Docker\Context\ContextBuilder
     */
    public function volume(string $volume): ContextBuilder
    {
        $this->commands[] = ['type' => 'VOLUME', 'volume' => $volume];

        return $this;
    }

    /**
     * Create context given the state of builder
     *
     * @return \Docker\Context\Context
     */
    public function getContext(): Context
    {
        if (isset($this->directory)) {
            $this->cleanDirectory();
        }

        $this->directory = sys_get_temp_dir().'/'.md5($this->from.serialize($this->commands));
        $this->fs->mkdir($this->directory);
        $this->write($this->directory);

        return new Context($this->directory, $this->format);
    }

    /**
     * @void
     */
    public function __destruct()
    {
        if (isset($this->directory)) {
            $this->cleanDirectory();
        }
    }

    /**
     * Write docker file and associated files in a directory
     *
     * @param string $directory Target directory
     *
     * @void
     */
    private function write(string $directory): void
    {
        $dockerfile = [];
        $dockerfile[] = 'FROM '.$this->from;

        foreach ($this->commands as $command) {
            switch ($command['type']) {
                case 'RUN':
                    $dockerfile[] = 'RUN '.$command['command'];
                    break;
                case 'ADD':
                    $dockerfile[] = 'ADD '.$this->getFile($directory, $command['content']).' '.$command['path'];
                    break;
                case 'COPY':
                    $dockerfile[] = 'COPY '.$command['from'].' '.$command['to'];
                    break;
                case 'ENV':
                    $dockerfile[] = 'ENV '.$command['name'].' '.$command['value'];
                    break;
                case 'WORKDIR':
                    $dockerfile[] = 'WORKDIR '.$command['workdir'];
                    break;
                case 'EXPOSE':
                    $dockerfile[] = 'EXPOSE '.$command['port'];
                    break;
                case 'VOLUME':
                    $dockerfile[] = 'VOLUME ' . $command['volume'];
                    break;
                case 'USER':
                    $dockerfile[] = 'USER ' . $command['user'];
                    break;
            }
        }

        if (!empty($this->entrypoint)) {
            $dockerfile[] = 'ENTRYPOINT ' . $this->entrypoint;
        }

        if (!empty($this->command)) {
            $dockerfile[] = 'CMD ' . $this->command;
        }

        $this->fs->dumpFile($directory.DIRECTORY_SEPARATOR.'Dockerfile', implode(PHP_EOL, $dockerfile));
    }

    /**
     * Generated a file in a directory
     *
     * @param string $directory Targeted directory
     * @param string $content   Content of file
     *
     * @return string Name of file generated
     */
    private function getFile(string $directory, string $content): string
    {
        $hash = md5($content);

        if (!array_key_exists($hash, $this->files)) {
            $file = tempnam($directory, '');
            $this->fs->dumpFile($file, $content);
            $this->files[$hash] = basename($file);
        }

        return $this->files[$hash];
    }

    /**
     * Clean directory generated
     */
    private function cleanDirectory(): void
    {
        if (isset($this->directory)) {
            $this->fs->remove($this->directory);
        }
    }
}

<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\ContainersCreatePostBody;
use Docker\API\Model\ContainersIdExecPostBody;
use Docker\API\Model\ExecIdStartPostBody;
use Docker\Manager\ExecManager;
use Docker\Tests\TestCase;

class ExecManagerTest extends TestCase
{
    /**
     * Return the container manager
     *
     * @return ExecManager
     */
    private function getManager()
    {
        return self::getDocker()->getExecManager();
    }

    public function testStartStream()
    {
        $createContainerResult = $this->createContainer();

        $execConfig = new ContainersIdExecPostBody();
        $execConfig->setAttachStdout(true);
        $execConfig->setAttachStderr(true);
        $execConfig->setCmd(["echo", "output"]);

        $execCreateResult = $this->getManager()->create($createContainerResult->getId(), $execConfig);

        $execStartConfig = new ExecIdStartPostBody();
        $execStartConfig->setDetach(false);
        $execStartConfig->setTty(false);

        $stream = $this->getManager()->start($execCreateResult->getId(), $execStartConfig, [], ExecManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\DockerRawStream', $stream);

        $stdoutFull = "";
        $stream->onStdout(function ($stdout) use (&$stdoutFull) {
            $stdoutFull .= $stdout;
        });
        $stream->wait();

        $this->assertEquals("output\n", $stdoutFull);

        self::getDocker()->getContainerManager()->kill($createContainerResult->getId(), [
            'signal' => 'SIGKILL'
        ]);
    }

    public function testExecFind()
    {
        $createContainerResult = $this->createContainer();

        $execConfig = new ContainersIdExecPostBody();
        $execConfig->setCmd(["/bin/true"]);

        $execCreateResult = $this->getManager()->create($createContainerResult->getId(), $execConfig);

        $execStartConfig = new ExecIdStartPostBody();
        $execStartConfig->setDetach(false);
        $execStartConfig->setTty(false);

        $this->getManager()->start($execCreateResult->getId(), $execStartConfig);

        $execFindResult = $this->getManager()->find($execCreateResult->getId());

        $this->assertInstanceOf(\Docker\API\Model\ExecIdJsonGetResponse200::class, $execFindResult);

        self::getDocker()->getContainerManager()->kill($createContainerResult->getId(), [
            'signal' => 'SIGKILL'
        ]);
    }

    private function createContainer()
    {
        $containerConfig = new ContainersCreatePostBody();
        $containerConfig->setImage('busybox:latest');
        $containerConfig->setCmd(['sh']);
        $containerConfig->setOpenStdin(true);
        $containerConfig->setLabels(new \ArrayObject(['docker-php-test' => 'true']));

        $containerCreateResult = self::getDocker()->getContainerManager()->create($containerConfig);
        self::getDocker()->getContainerManager()->start($containerCreateResult->getId());

        return $containerCreateResult;
    }
}

<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\AuthConfig;
use Docker\API\Model\BuildInfo;
use Docker\API\Model\CreateImageInfo;
use Docker\API\Model\PushImageInfo;
use Docker\Context\ContextBuilder;
use Docker\Manager\ImageManager;
use Docker\Tests\TestCase;

class ImageManagerTest extends TestCase
{
    /**
     * Return a container manager
     *
     * @return ImageManager
     */
    private function getManager()
    {
        return $this->getDocker()->getImageManager();
    }

    public function testBuildStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $buildStream = $this->getManager()->build($context->read(), ['t' => 'test-image'], ImageManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\BuildStream', $buildStream);

        $lastMessage = "";

        $buildStream->onFrame(function (BuildInfo $frame) use (&$lastMessage) {
            $lastMessage = $frame->getStream();
        });
        $buildStream->wait();

        $this->assertStringContainsString("Successfully", $lastMessage);
    }

    public function testBuildObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $buildInfos = $this->getManager()->build($context->read(), ['t' => 'test-image'], ImageManager::FETCH_OBJECT);

        $this->assertIsArray($buildInfos);
        $this->assertStringContainsString("Successfully", $buildInfos[count($buildInfos) - 1]->getStream());
    }

    public function testCreateStream()
    {
        $createImageStream = $this->getManager()->create(null, [
            'fromImage' => 'registry:latest'
        ], ImageManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\CreateImageStream', $createImageStream);

        $firstMessage = null;

        $createImageStream->onFrame(function (CreateImageInfo $createImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $createImageInfo->getStatus();
            }
        });
        $createImageStream->wait();

        $this->assertStringContainsString("Pulling from library/registry", $firstMessage);
    }

    public function testCreateObject()
    {
        $createImagesInfos = $this->getManager()->create(null, [
            'fromImage' => 'registry:latest'
        ], ImageManager::FETCH_OBJECT);

        $this->assertIsArray($createImagesInfos);
        $this->assertStringContainsString("Pulling from library/registry", $createImagesInfos[0]->getStatus());
    }

    public function testPushStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->build($context->read(), ['t' => 'localhost:5000/test-image'], ImageManager::FETCH_OBJECT);

        $registryConfig = new AuthConfig();
        $registryConfig->setServeraddress('localhost:5000');
        $pushImageStream = $this->getManager()->push('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], ImageManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\PushStream', $pushImageStream);

        $firstMessage = null;

        $pushImageStream->onFrame(function (PushImageInfo $pushImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $pushImageInfo->getStatus();
            }
        });
        $pushImageStream->wait();

        $this->assertStringContainsString("The push refers to repository [localhost:5000/test-image]", $firstMessage);
    }

    public function testPushObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->build($context->read(), ['t' => 'localhost:5000/test-image'], ImageManager::FETCH_OBJECT);

        $registryConfig = new AuthConfig();
        $registryConfig->setServeraddress('localhost:5000');
        $pushImageInfos = $this->getManager()->push('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], ImageManager::FETCH_OBJECT);

        $this->assertIsArray($pushImageInfos);
        $this->assertStringContainsString("The push refers to repository [localhost:5000/test-image]", $pushImageInfos[0]->getStatus());
    }

    public function testTag()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->build($context->read(), ['t' => 'localhost:5000/test-image']);

        $this->getManager()->tag('localhost:5000/test-image', ['repo' => 'localhost:5000/test-image', 'tag' => 'new-tag']);

        $image = $this->getManager()->find('localhost:5000/test-image:new-tag');
        $this->assertNotNull($image);

        $images = $this->getManager()->findAll(['filters' => json_encode(['reference' => ['localhost:5000/test-image:new-tag']])]);
        $this->assertCount(1, $images);
    }
}

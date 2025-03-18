<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\EventMessage;
use Docker\Manager\MiscManager;
use Docker\Tests\TestCase;

class MiscManagerTest extends TestCase
{
    /**
     * Return a container manager
     *
     * @return MiscManager
     */
    private function getManager()
    {
        return $this->getDocker()->getMiscManager();
    }

    public function testGetEventsStream()
    {
        $stream = $this->getManager()->getEvents([
            'since' => time() - 1,
            'until' => time() + 4
        ], MiscManager::FETCH_STREAM);
        $lastEvent = null;

        $stream->onFrame(function (EventMessage $event) use (&$lastEvent) {
            $lastEvent = $event;
        });

        $this->getDocker()->getImageManager()->create(null, [
            'fromImage' => 'busybox:latest'
        ]);
        $stream->wait();

        $this->assertInstanceOf(EventMessage::class, $lastEvent);
    }

    public function testGetEventsObject()
    {
        $events = $this->getManager()->getEvents([
            'since' => time() - 60,
            'until' => time()
        ], MiscManager::FETCH_OBJECT);

        $this->assertIsArray($events);
        $this->assertInstanceOf(EventMessage::class, $events[0]);
    }
}

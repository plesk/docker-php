<?php

namespace Docker\Tests;

use Docker\Docker;

class TestCase extends \PHPUnit\Framework\TestCase
{
    private static $docker;

    public static function getDocker()
    {
        if (null === self::$docker) {
            self::$docker = new Docker();
        }

        return self::$docker;
    }
}

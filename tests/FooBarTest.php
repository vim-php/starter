<?php

namespace Sensorario\Test;

use PHPUnit\Framework\TestCase;
use Sensorario\Config\Config;
use Sensorario\Develog\Logger\NormaLogger;

class FooBarTest extends TestCase
{
    public function testTrue()
    {
        $this->assertEquals(true, 1);

        $logger = new NormaLogger();

        $logger->setLogFile(
            (new Config())->getRootDir()
            . '/var/logs/test.log'
        );

        $logger->write('log this content …');
    }
}

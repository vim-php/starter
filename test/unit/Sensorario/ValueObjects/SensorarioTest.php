<?php

namespace Sensorario\ValueObjects;

use PHPUnit_Framework_TestCase;

final class SensorarioTest extends PHPUnit_Framework_TestCase
{
    public function testInformations()
    {
        $this->sensorario = Sensorario::getDefaults();

        $this->assertEquals(
            'Simone',
            $this->sensorario->name()
        );
    }
}

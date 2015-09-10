<?php

namespace Sensorario\ValueObjects;

final class Sensorario
{
    private function __construct()
    {

    }

    public static function getDefaults()
    {
        return new self();
    }

    public function name()
    {
        return 'Simone';
    }
}

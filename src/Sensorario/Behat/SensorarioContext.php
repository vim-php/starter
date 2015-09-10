<?php

namespace Sensorario\Behat;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

final class SensorarioContext implements Context
{
    /**
     * @Given /^there is a "([^"]*)" file in this project$/
     */
    public function thereIsAComposerJsonFileInThisProject($filename)
    {
        if (!file_exists(__DIR__ . '/../../../' . $filename)) {
            throw new RuntimeException(
                'composer.json file MUST exists!!!'
            );
        }
    }

    /**
     * @Given /^project's name is "([^"]*)"!!!$/
     */
    public function containsAuthorDescription($projectName)
    {
        $contens = file_get_contents(__DIR__ . '/../../../composer.json');
        if (!json_decode($contens)->name == $projectName) {
            throw new RuntimeException(
                'Invalid project name'
            );
        }
    }
}

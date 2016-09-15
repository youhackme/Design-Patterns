<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 23:45
 */
namespace App;

class BattlePlan
{
    public $commandsWithCodeNames = [];

    public function setCommand($codeName, Command $command)
    {
        $this->commandsWithCodeNames[$codeName] = $command;
    }

    public function executeCommand($codeName)
    {
        $command = $this->commandsWithCodeNames[$codeName];
        $command->execute();
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 14/09/2016
 * Time: 12:49
 */
namespace App;

class Invoker
{
    private $commands, $calculator, $current;

    public function __construct()
    {
        $this->current = -1;
    }

    public function Undo()
    {
        if ($this->current >= 0) {
            $this->commands[$this->current]->unExecute();
            $this->current--;
        }
    }

    public function Compute($command)
    {
        $command->Execute();
        $this->current++;
        $this->commands[$this->current] = $command;
    }
}
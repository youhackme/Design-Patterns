<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/09/2016
 * Time: 15:00
 */
namespace App;

class SupportRep
{
    private $_state = null;
    public $numOfCalls = 0;

    public function __construct()
    {
        $this->_state = new ModerateState($this);
    }

    public function setState($state)
    {
        $this->_state = $state;
    }

    public function sayHi()
    {
        $this->_state->sayHi();
        $this->numOfCalls++;
    }
}
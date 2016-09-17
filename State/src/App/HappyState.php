<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/09/2016
 * Time: 15:00
 */
namespace App;

class HappyState implements StateInterface
{
    private $_supportRep = null;

    public function __construct(SupportRep $supportRep)
    {
        $this->_supportRep = $supportRep;
    }

    public function sayHi()
    {
        echo "Hi there! \n";
        if ($this->_supportRep->numOfCalls > 5 && $this->_supportRep->numOfCalls < 10) {
            $this->_supportRep->setState(new ModerateState($this->_supportRep));
        }

        if ($this->_supportRep->numOfCalls > 10) {
            $this->_supportRep->setState(new AngryState($this->_supportRep));
        }
    }
}
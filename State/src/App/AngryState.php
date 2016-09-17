<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/09/2016
 * Time: 14:59
 */
namespace App;

class AngryState implements StateInterface
{
    private $_supportRep = null;

    public function __construct(SupportRep $supportRep)
    {
        $this->_supportRep = $supportRep;
    }

    public function sayHi()
    {
        echo "Yes?. \n";
    }
}
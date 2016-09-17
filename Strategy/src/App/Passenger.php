<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 15:54
 */

namespace App;

class Passenger
{
    private $_transportation = null;

    public function goToWork()
    {
        $this->_transportation->transport($this);
    }

    public function chooseTransport(Transportation $transportation)
    {
        $this->_transportation = $transportation;
    }
}
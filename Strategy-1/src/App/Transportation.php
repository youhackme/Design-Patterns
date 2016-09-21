<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 15:53
 */

namespace App;

interface  Transportation
{
    function transport(Passenger $passenger);
}
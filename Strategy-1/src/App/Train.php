<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 15:53
 */
namespace App;

class Train implements Transportation
{
    public function transport(Passenger $passenger)
    {
        echo "Take you to destination via route B\n";
    }
}
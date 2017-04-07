<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:16
 */

namespace App;


class BasicInspection implements CarService
{

    public function getCost()
    {
        return 25;
    }

}
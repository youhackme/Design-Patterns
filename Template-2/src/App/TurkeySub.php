<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 12:14
 */

namespace App;


class TurkeySub extends \App\Sub
{
    public function addPrimaryToppings()
    {
        var_dump("Add Turkey sub..");
        return $this;
    }
}
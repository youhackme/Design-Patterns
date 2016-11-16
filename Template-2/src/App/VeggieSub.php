<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 12:14
 */

namespace App;


class VeggieSub extends \App\Sub
{

    public function addPrimaryToppings()
    {
        var_dump("Add veggies sub..");
        return $this;
    }

}
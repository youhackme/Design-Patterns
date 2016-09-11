<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 12:43
 */

namespace App;

abstract class Toy
{
    public $name = '';
    public $price = 0;

    public function prepare()
    {
        echo $this->name . ' is prepared';
    }

    public function package()
    {
        echo $this->name . ' is packaged';
    }

    public function label()
    {
        echo $this->name . ' is priced at ' . $this->price;
    }
}
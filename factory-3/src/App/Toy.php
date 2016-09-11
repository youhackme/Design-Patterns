<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:33
 */
namespace App;

abstract class Toy
{
    public $name = '';
    public $price = 0;
    public $engine = null;
    public $wheels = [];
    public $rotorBlade = null;

    abstract function prepare();

    public function package()
    {
        echo $this->name . " is packaged\n";
    }

    public function label()
    {
        echo $this->name . ' is priced at ' . $this->price . "\n";
    }
}
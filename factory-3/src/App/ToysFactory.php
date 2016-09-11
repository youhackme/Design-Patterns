<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:15
 */
namespace App;

abstract class ToysFactory
{
    public function produceToy($toyName)
    {
        $toy = null;
        $toy = $this->createToy($toyName);
        $toy->prepare();
        $toy->package();
        $toy->label();
        return $toy;
    }

    abstract public function createToy($toyName);
}
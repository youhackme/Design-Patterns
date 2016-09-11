<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:43
 */
namespace App;

class NyToysFactory extends ToysFactory
{
    public function createToy($toyName)
    {
        $toy = null;
        $nyComponentsFactory = new NyComponentsFactory();
        if ('car' == $toyName) {
            $toy = new NyCar($nyComponentsFactory);
        } else {
            if ('helicopter' == $toyName) {
                $toy = new NyHelicopter($nyComponentsFactory);
            }
        }
        return $toy;
    }
}
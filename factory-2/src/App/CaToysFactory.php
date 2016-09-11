<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 12:57
 */

namespace App;


class CaToysFactory extends ToysFactory
{
    public function createToy($toyName)
    {
        $toy = null;
        if ('car' == $toyName) {
            $toy = new CaCar();
        } else {
            if ('helicopter' == $toyName) {
                $toy = new CaHelicopter();
            }
        }
        return $toy;
    }
}
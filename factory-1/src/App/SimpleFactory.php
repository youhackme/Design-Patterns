<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:25
 */

namespace App;


class SimpleFactory
{
    public function createToy($toyName)
    {
        $toy = null;
        if ('car' == $toyName) {
            $toy = new \App\Toys\Car();
        } else {
            if ('helicopter' == $toyName) {
                $toy = new \App\Toys\Helicopter();
            }
        }
        return $toy;
    }
}
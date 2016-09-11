<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 12:53
 */

namespace App;


class NySimpleFactory
{
    public function createToy($toyName)
    {
        $toy = null;
        if ('car' == $toyName) {
            $toy = new \App\Toys\NyCar();
        } else {
            if ('helicopter' == $toyName) {
                $toy = new \App\Toys\NyHelicopter();
            }
        }
        return $toy;
    }
    

}
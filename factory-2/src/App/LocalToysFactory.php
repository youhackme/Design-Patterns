<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 12:54
 */

namespace App;


class LocalToysFactory extends ToysFactory
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




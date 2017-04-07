<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 24/09/2016
 * Time: 17:55
 */

namespace App;


class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {

        if (!$home->lightsOff) {
            throw new \Exception("The lights are still On.");
        }

        $this->next($home);

    }
}
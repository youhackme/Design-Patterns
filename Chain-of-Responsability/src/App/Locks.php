<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 24/09/2016
 * Time: 17:55
 */

namespace App;


class Locks extends HomeChecker
{

    public function check(HomeStatus $home)
    {

        if (!$home->locked) {
            throw new \Exception("The doors are not locked.");
        }

        $this->next($home);

    }

}
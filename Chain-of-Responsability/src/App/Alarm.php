<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 24/09/2016
 * Time: 17:55
 */

namespace App;


class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {

        if (!$home->alarmOn) {
            throw new \Exception("The Alarm has not been set.");
        }

        $this->next($home);

    }

}
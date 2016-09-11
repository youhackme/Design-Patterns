<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 19:18
 */

namespace App;


class Mother implements Observer
{
    public function update()
    {
        $this->wakeUp();
        $this->comfortBaby();
    }

    public function wakeUp()
    {
        echo 'Wake up at once!';
    }

    public function comfortBaby()
    {
        echo 'Baby do not cry.';
    }
}
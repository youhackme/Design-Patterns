<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:37
 */

namespace App;

class Kindle implements eReaderInterface
{

    public function turnOn()
    {
        var_dump("Turn the Kindle On");
    }


    public function pressNextButton()
    {
        var_dump("Press the next button on the kindle");
    }

}
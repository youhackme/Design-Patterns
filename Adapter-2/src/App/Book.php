<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:37
 */

namespace App;

class Book implements BookInterface
{

    public function open()
    {
        var_dump("Opening the page..");
    }


    public function turnPage()
    {
        var_dump("Turning the page..");
    }

}
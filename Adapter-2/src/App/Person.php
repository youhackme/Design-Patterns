<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:39
 */

namespace App;


class Person
{

    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }

}
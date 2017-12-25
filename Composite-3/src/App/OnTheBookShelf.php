<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 25/12/2017
 * Time: 15:06
 */

namespace App;


abstract class OnTheBookShelf
{
    abstract function getBookInfo($previousBook);

    abstract function getBookCount();

    abstract function setBookCount($new_count);

    abstract function addBook($oneBook);

    abstract function removeBook($oneBook);
}
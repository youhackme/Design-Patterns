<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 25/12/2017
 * Time: 15:07
 */

namespace App;


class OneBook extends OnTheBookShelf
{
    private $title;
    private $author;

    function __construct($title, $author)
    {
        $this->title  = $title;
        $this->author = $author;
    }

    function getBookInfo($bookToGet)
    {
        if (1 == $bookToGet) {
            return $this->title . " by " . $this->author;
        } else {
            return false;
        }
    }

    function getBookCount()
    {
        return 1;
    }

    function setBookCount($newCount)
    {
        return false;
    }

    function addBook($oneBook)
    {
        return false;
    }

    function removeBook($oneBook)
    {
        return false;
    }
}
<?php

require('vendor/autoload.php');


$firstBook  = new \App\OneBook('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
$secondBook = new \App\OneBook('PHP Bible', 'Converse and Park');
$thirdBook  = new \App\OneBook('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

var_dump($firstBook, $secondBook);

$books = new \App\SeveralBooks();

$booksCount = $books->addBook($firstBook);

var_dump($booksCount);
$booksCount = $books->addBook($secondBook);

var_dump($booksCount);
$booksCount = $books->addBook($thirdBook);


$booksCount = $books->removeBook($firstBook);
var_dump($booksCount);
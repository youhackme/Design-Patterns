<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */
require('vendor/autoload.php');

//Read a book
echo (new \App\Person())->read(new \App\Book());

//Read a Kindle by using an adapter
echo (new \App\Person())->read(new \App\KindleAdapter(new \App\Kindle()));

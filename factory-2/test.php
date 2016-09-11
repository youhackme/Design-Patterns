<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */

require('vendor/autoload.php');

//The main (Local) Factory
$toys = new  \App\LocalToysFactory((new \App\SimpleFactory()));
$toys->produceToy('helicopter');

// NY Factory
$toys = new  \App\NyToysFactory((new \App\NySimpleFactory()));
$toys->produceToy('helicopter');

//CA Factory
$toys = new  \App\CaToysFactory((new \App\CaSimpleFactory()));
$toys->produceToy('helicopter');


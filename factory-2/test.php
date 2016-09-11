<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$test = new \App\NySimpleFactory();

$toys = new  \App\NYToysFactory((new \App\NySimpleFactory()));
$toys->produceToy('car');
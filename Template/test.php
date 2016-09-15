<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$programmer = new \App\Programmer();
echo $programmer->workRoutine();

$marketer = new \App\Marketer();
echo $marketer->workRoutine();
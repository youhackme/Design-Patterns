<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */
require('vendor/autoload.php');

$locks = new \App\Locks;
$lights = new \App\Lights;
$alarm = new \App\Alarm;

$locks->succeedWith($lights);

$lights->succeedWith($alarm);

$status = new \App\Homestatus;
$locks->check($status);


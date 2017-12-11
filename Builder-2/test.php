<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/12/2017
 * Time: 23:23
 */


require('vendor/autoload.php');

use App\CarBuilder;
use App\Director;
use App\TruckBuilder;


$truckBuilder = new TruckBuilder();
$newVehicle   = (new Director())->build($truckBuilder);

var_dump($newVehicle);
$carBuilder = new CarBuilder();
$newVehicle = (new Director())->build($carBuilder);
var_dump($newVehicle);
<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$mary = new \App\Mother();
$nathan = new \App\Son();
$nathan->registerObserver($mary);

$nathan->startCrying();
//$nathan->stopCrying();

if ($nathan->isCrying()) {
    $nathan->notifyObservers();
}

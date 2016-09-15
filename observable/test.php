<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');



// Commander's code
$peter = new Gunner();
$gunnerFireCommand = new GunnerFireCommand($peter);
$planA = new BattlePlan();
$planA->setCommand('planA', $gunnerFireCommand);

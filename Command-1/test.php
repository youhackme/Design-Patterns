<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');

// Commander's code
$hyder = new \App\Gunner();

$gunnerFireCommand = new \App\GunnerFireCommand($hyder);

$planA = new \App\BattlePlan();
$planA->setCommand('planA', $gunnerFireCommand);
echo $planA->executeCommand('planA');

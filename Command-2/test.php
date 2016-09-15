<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');

$User = new \App\Invoker();
$calculator = new \App\Calculator();
$command = new \App\concreteCommand($calculator, '+', 5);
$User->Compute($command);
echo "After +5: " . $calculator->getCurrent() . "<br/>\n";
$command = new \App\concreteCommand($calculator, '*', 7);
$User->Compute($command);
echo "After *7: " . $calculator->getCurrent() . "<br/>\n";
$command = new \App\concreteCommand($calculator, '/', 2);
$User->Compute($command);
echo "After /2: " . $calculator->getCurrent() . "<br/>\n";
$command = new \App\concreteCommand($calculator, '-', 10);
$User->Compute($command);
echo "After -10: " . $calculator->getCurrent() . "<br/>\n";
$User->Undo();
echo "Undo Operation: " . $calculator->getCurrent() . "<br/>\n";
$User->Undo();
echo "Undo Operation: " . $calculator->getCurrent() . "<br/>\n";
$User->Undo();
echo "Undo Operation: " . $calculator->getCurrent() . "<br/>\n";
$User->Undo();
echo "Undo Operation: " . $calculator->getCurrent() . "<br/>\n";
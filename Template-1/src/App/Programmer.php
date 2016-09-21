<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 12:09
 */

namespace App;

class Programmer extends Employee
{
    public function doWork()
    {
        $this->doProgrammingTask();
    }

    public function doProgrammingTask()
    {
        echo "Doing programming task \n";
    }
}
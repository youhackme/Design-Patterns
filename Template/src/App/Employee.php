<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 12:12
 */

namespace App;


abstract class Employee
{

    public function workRoutine()
    {
        $this->markAttendance();
        $this->doWork();
        $this->reportDailyCompletion();
    }

    public function markAttendance()
    {
        echo "I am marking my attendance\n";
    }

    public function reportDailyCompletion()
    {
        echo "I am reporting my daily completion\n";
    }

    abstract public function doWork();
}

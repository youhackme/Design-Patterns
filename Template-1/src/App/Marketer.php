<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 12:14
 */

namespace App;


class Marketer extends Employee
{
    public function doWork()
    {
        $this->doMarketingTask();
    }

    public function doMarketingTask()
    {
        echo "Doing marketing task \n";
    }
}
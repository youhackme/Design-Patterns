<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 14/09/2016
 * Time: 12:48
 */

namespace App;

abstract class Command
{
    abstract public function unExecute();

    abstract public function Execute();
}
<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:32
 */
namespace App;

class NyComponentsFactory extends \App\ComponentsFactory
{
    public function createEngine()
    {
        return new \App\Components\NyEngine();
    }

    public function createWheel()
    {
        return new \App\Components\NyWheel();
    }

    public function createRotorBlade()
    {
        return new \App\Components\NyRotorBlade();
    }
}
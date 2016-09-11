<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:37
 */

namespace App\Toys;


class NyHelicopter extends  \App\Toy
{
    public $name = 'NyCar';
    public $price = 30;
    public $componentsFactory = null;

    public function __construct(ComponentsFactory $componentsFactory)
    {
        $this->componentsFactory = componentsFactory;
    }

    public function prepare()
    {
        $this->engine = $this->componentsFactory->createEngine();
        $this->rotorBlade = $this->componentsFactory->createRotorBlade();
    }
}
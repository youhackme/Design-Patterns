<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:35
 */
namespace App\Toys;

class NyCar extends \App\Toy
{
    public $name = 'Cars made by franchise company';
    public $price = 30;
    public $componentsFactory = null;

    public function __construct(\App\NyComponentsFactory $componentsFactory)
    {
        $this->componentsFactory = $componentsFactory;
    }

    public function prepare()
    {
        echo "Prepping Car with different parts (Engine and Wheel) \n";
        $this->engine = $this->componentsFactory->createEngine();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
    }
}
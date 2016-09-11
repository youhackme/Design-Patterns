<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:15
 */
namespace App;

class ToysFactory
{
    public $simpleFactory;

    public function __construct(SimpleFactory $simpleFactory)
    {
        $this->simpleFactory = $simpleFactory;
    }

    public function produceToy($toyName)
    {
        $toy = null;
        $toy = $this->simpleFactory->createToy($toyName);
        $toy->prepare();
        $toy->package();
        $toy->label();
        return $toy;
    }
}
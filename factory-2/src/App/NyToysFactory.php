<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 12:54
 */

namespace App;


class NyToysFactory extends ToysFactory
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




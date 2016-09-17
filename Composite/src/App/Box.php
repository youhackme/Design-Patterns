<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 16/09/2016
 * Time: 23:10
 */

namespace App;


class Box implements ProductComponent
{
    private $_productComponents = [];

    public function getName()
    {
        $productComponents = $this->getProductComponents();
        foreach ($productComponents as $productComponent) {
            $productComponent->getName();
        }
    }

    public function addProductComponent(ProductComponent $productComponent)
    {
        $this->_productComponents[] = $productComponent;
    }

    public function removeProductComponent($i)
    {
        unset($this->_productComponents[$i]);
    }

    public function getProductComponents()
    {
        return $this->_productComponents;
    }
}
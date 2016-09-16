<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 16/09/2016
 * Time: 23:09
 */

namespace App;

class Product implements ProductComponent
{
    private $_name = null;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        echo $this->_name . "\n";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 21/09/2016
 * Time: 20:47
 */

namespace App;


abstract class Sub
{

    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump("Laying down the bread");
        return $this;
    }

    protected function addLettuce()
    {
        var_dump("Add some lettuce");
        return $this;
    }

    protected function addSauces()
    {
        var_dump("Add Sauces");
        return $this;
    }

    protected abstract function addPrimaryToppings();

}
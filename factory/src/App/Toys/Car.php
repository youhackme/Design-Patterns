<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:26
 */

namespace App\Toys;


class Car
{

    public function prepare()
    {
        echo "Preping car toy";
    }

    public function package()
    {
        echo "Packaging car toy";
    }

    public function label()
    {
        echo "Labelling car toy";
    }
}
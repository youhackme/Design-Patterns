<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 24/09/2016
 * Time: 18:15
 */

namespace App;


abstract class HomeChecker
{
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}
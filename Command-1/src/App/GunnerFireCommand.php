<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 23:45
 *
 */
namespace App;

class GunnerFireCommand implements Command
{
    public $_gunner = null;

    public function __construct(Gunner $gunner)
    {
        $this->_gunner = $gunner;
    }

    public function execute()
    {

        $this->_gunner->fire();
    }
}
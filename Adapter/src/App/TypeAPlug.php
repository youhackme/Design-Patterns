<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/09/2016
 * Time: 23:10
 */

namespace App;


class TypeAPlug
{
    public function connect(TypeASocketInterface $socket)
    {
        $socket->connectTwoPins();
    }
}
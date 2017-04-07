<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/09/2016
 * Time: 23:13
 */

namespace App;


class GtypeToAtypeSocketAdatper implements TypeASocketInterface
{
    private $typeGSocket = null;

    public function __construct(TypeGSocket $typeGSocket)
    {
        $this->typeGSocket = $typeGSocket;
    }

    public function connectTwoPins()
    {
        // some algorithms to be used
        $this->connectThreePins();
    }
}
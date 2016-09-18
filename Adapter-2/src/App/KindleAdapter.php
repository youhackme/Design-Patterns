<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:53
 */

namespace App;


class KindleAdapter implements BookInterface
{

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        return $this->kindle->turnOn();
    }

    public function turnPage()
    {
        return $this->kindle->pressNextButton();
    }

}
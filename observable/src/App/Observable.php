<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 19:11
 */

namespace App;


interface Observable
{
    public function registerObserver(Observer $o);

    public function removeObserver(Observer $o);

    public function notifyObservers();
}
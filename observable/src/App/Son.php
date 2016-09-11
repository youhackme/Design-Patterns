<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 19:16
 */
namespace App;

class Son implements Observable
{
    private $_observers = [];
    private $_isCry = true;

    public function registerObserver(Observer $o)
    {
        $this->_observers[] = $o;
    }

    public function removeObserver(Observer $o)
    {
        foreach ($this->_observers as $index => $value) {
            if ($value == $o) {
                unset($this->_observers[$index]);
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->_observers as $observer) {
            $observer->update();
        }
    }


    public function isCrying()
    {
        return $this->_isCry;
    }


    public function startCrying()
    {
        $this->_isCry = true;
    }


    public function stopCrying()
    {
        $this->_isCry = false;
    }
}

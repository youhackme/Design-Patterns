<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 14/09/2016
 * Time: 12:49
 */
namespace App;

class Calculator
{
    private $current;

    public function __construct()
    {
        $this->current = 0;
    }

    public function Action($operator, $operand)
    {
        switch ($operator) {
            case '+':
                $this->current += $operand;
                break;
            case '-':
                $this->current -= $operand;
                break;
            case '*':
                $this->current *= $operand;
                break;
            case '/':
                $this->current /= $operand;
                break;
        }
    }

    public function getCurrent()
    {
        return $this->current;
    }
}
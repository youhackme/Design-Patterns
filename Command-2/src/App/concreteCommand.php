<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 14/09/2016
 * Time: 12:48
 */

namespace App;

class concreteCommand extends Command
{
    private $operator, $operand, $calculator;

    public function __construct($calculator, $operator, $operand)
    {
        $this->operator = $operator;
        $this->operand = $operand;
        $this->calculator = $calculator;
    }

    public function Execute()
    {
        $this->calculator->Action($this->operator, $this->operand);
    }

    public function unExecute()
    {
        $this->calculator->Action($this->Undo($this->operator), $this->operand);
    }

    private function Undo($operator)
    {
        switch ($operator) {
            case '+':
                return '-';
            case '-':
                return '+';
            case '*':
                return '/';
            case '/':
                return '*';
        }
    }
}
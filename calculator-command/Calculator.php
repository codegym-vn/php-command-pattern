<?php

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 6/6/17
 * Time: 3:41 PM
 */
class Calculator
{
    private $operator;

    function __construct(IOperator $operator){
        $this->operator = $operator;
    }

    function execute($firstOperator, $secondOperator){
        if(isset($this->operator)){
            return $this->operator->execute($firstOperator, $secondOperator);
        }
        throw new Exception("Operator is not setted");
    }
}
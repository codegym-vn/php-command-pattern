<?php
    require_once 'IOperator.php';

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 6/6/17
 * Time: 3:56 PM
 */
class AddOperator implements IOperator
{
    function execute($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }
}
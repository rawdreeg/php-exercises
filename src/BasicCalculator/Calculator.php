<?php

namespace Rawdreeg\PhpCodingExercises\BasicCalculator;

class Calculator
{
    public function calc($expression)
    {
        $expression = preg_replace('/\s+/', '', $expression);
        // evaluate the expression
        $result = eval("return $expression;");
        if ($result === false) {
            throw new \Exception("Invalid expression");
        }
        return $result;
    }
}
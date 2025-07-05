<?php

use Rawdreeg\PhpCodingExercises\BasicCalculator\Calculator;

require('Calculator.php');

class BasicCalculatorTest extends \PHPUnit\Framework\TestCase
{

    public function testBasicCalculations()
    {
        $calculator = new Calculator();
        // Can contain only '+', '-', '(', ')', spaces, and integers
        $this->assertEquals($calculator->calc(' 1 + 1 '), 2);
        $this->assertEquals($calculator->calc('9-5 + 2'), 6);

    }

    public function testMultiDigit()
    {
        $calculator = new Calculator();
        // Accepting integers and not only digits
        $this->assertEquals($calculator->calc('100 - 5'), 95);
    }

    public function testComplexCalculation()
    {
        $calculator = new Calculator();
        // A bit more complex expressions
        $this->assertEquals($calculator->calc('((5+3+(1+2)-9)+1) + (9+1)'), 13);
    }
}
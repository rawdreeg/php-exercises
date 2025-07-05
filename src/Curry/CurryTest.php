<?php

use Rawdreeg\PhpCodingExercises\Curry\Curry;

class CurryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Should test the basic usage
     */
    public function testCurryBasic()
    {
        $add = function ($a, $b) {
            return $a + $b;
        };
        $curryInstance = new Curry();
        $curry = $curryInstance->curry($add);
        $first = $curry(1);
        $initializedCurry = $curryInstance->curry($add, 1);
        $this->assertEquals(3, $first(2));
        $this->assertEquals(3, $initializedCurry(2));
    }

    /**
     * Testing with single or no arg
     */
    public function testCurryManipulateArgs()
    {
        $output = function ($a) {
            return $a;
        };
        $void = function () {
            return 'foo';
        };

        $curryInstance = new Curry();
        $curry = $curryInstance->curry($output);
        $curryVoid = $curryInstance->curry($void);

        // Test with single argument
        $this->assertEquals($curry(1), 1);
        // Test with no arguments
        $this->assertEquals($curryVoid(), 'foo');
    }

    /**
     * Testing with big amount of arguments
     */
    public function testWithMultipleArguments()
    {
        $adder = function($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        $curryInstance = new Curry();
        $curry = $curryInstance->curry($adder, 1, 2);
        $firstThree = $curry(3);
        $firstFour = $firstThree(4);
        $this->assertEquals($firstFour, 10);
    }

    /**
     * Testing re-usage of inner curries
     */
    public function testInnerCurryReUsage()
    {
        $adder = function($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        $curryInstance = new Curry();
        $curry = $curryInstance->curry($adder);
        $firstOne = $curry(1);
        $firstTwo = $firstOne(2);
        $firstThree = $firstTwo(3);
        $firstFour = $firstThree(4);
        $this->assertEquals($firstFour, 10);

        $firstThree2 = $firstTwo(7);
        $firstFour2 = $firstThree2(10);
        $this->assertEquals($firstFour2, 20);
    }
}
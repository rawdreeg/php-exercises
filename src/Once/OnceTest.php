<?php

use Rawdreeg\PhpCodingExercises\Once\Once;

function ret($value)
{
    return $value;
}

class OnceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Should test the basic usage
     */
    public function testOnceBasic()
    {
        $count = 0;
        $value = function ($ret) use (&$count) {
            ++$count;
            return $ret;
        };

        $once = new Once();
        $init = $once->once($value);
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
        $this->assertEquals($count, 1);
    }

    public function testWithFuncAsString()
    {
        $once = new Once();
        $init = $once->once('ret');
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
    }

    public function testMultipleArguments()
    {
        $count = 0;
        $concat = function ($a, $b, $c) use (&$count) {
            ++$count;
            return $a . $b . $c;
        };

        $once = new Once();
        $init = $once->once($concat);
        $this->assertEquals($init(1, 2, 3), '123');
        $this->assertEquals($init(1), '123');
        $this->assertEquals($count, 1);
    }

    public function testMultiUse()
    {
        $count = 0;
        $value = function ($ret) use (&$count) {
            ++$count;
            return $ret;
        };

        $once1 = new Once();
        $once2 = new Once();
        $init1 = $once1->once($value);
        $init2 = $once2->once($value);
        $this->assertEquals($init1(1), 1);
        $this->assertEquals($init2(2), 2);
        $this->assertEquals($init1(-1), 1);
        $this->assertEquals($init2(-2), 2);
    }
}
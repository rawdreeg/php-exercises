<?php

use Rawdreeg\PhpCodingExercises\Flatten\Flatten;

class FlattenTest extends \PHPUnit\Framework\TestCase
{
    public function testFlattenDeep()
    {
        $flatten = new Flatten();
        // Flattens a nested array (of any depth), if passing shallow flag,
        // the array will only be flattened a single
        $arr = [1,2,3,[4]];
        $this->assertEquals($flatten->flatten($arr), [1,2,3,4]);

        $arr = [1,2,3,[4, [5, [6, 7, 8]]]];
        $this->assertEquals($flatten->flatten($arr), [1,2,3,4,5,6,7,8]);
    }

    public function testShallowFlatten()
    {
        $flatten = new Flatten();
        // Testing with shallow flag to a single level
        $arr = [1,2,3,[4]];
        $this->assertEquals($flatten->flatten($arr, true), [1,2,3,4]);

        $arr = [1,2,3,[4, [5]]];
        $this->assertEquals($flatten->flatten($arr, true), [1,2,3,4,[5]]);
    }
}
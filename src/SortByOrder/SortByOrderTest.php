<?php

use Rawdreeg\PhpCodingExercises\SortByOrder\SortByOrder;

class SortByOrderTest extends \PHPUnit\Framework\TestCase
{

    public function testZeros()
    {
        $sortByOrder = new SortByOrder();
        // basic
        $this->assertEquals($sortByOrder->sortZeros([5, 0, 6, 1, 0, 8]), [5, 6, 1, 8, 0, 0]);
        // a bit more complex
        $this->assertEquals($sortByOrder->sortZeros([5, 6, '0', 1, 0, '0', 8, '0']), [5, 6, 1, 8, '0', 0, '0', '0']);
        // make sure won't order null, false
        $this->assertEquals($sortByOrder->sortZeros([5, null, '0', 1, 0, '0', false, 9, '0']), [5, null, 1, false, 9, '0', 0, '0', '0']);
    }
}
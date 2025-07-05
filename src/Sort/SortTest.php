<?php

use Rawdreeg\PhpCodingExercises\Sort\Sort;

class SortTest extends \PHPUnit\Framework\TestCase
{
    public function testSort()
    {
        $sort = new Sort();
        $arr = [5, 1, 3, 2, 4];
        $sortedArr = $sort->sortArray($arr);
        $this->assertTrue($sortedArr === [1, 2, 3, 4, 5]);
    }

    public function testLongSort()
    {
        $sort = new Sort();
        // Make it faster than n^2
        $arr = [];
        for ($i = 0; $i < 10000; ++$i) {
            $arr[] = rand(1, 10000);
        }

        $sortedArr = $sort->sortArray($arr);
        $lastNumber = $sortedArr[0];

        for ($i = 1; $i < 10000; ++$i) {
            if ($lastNumber > $sortedArr[$i]) {
                $this->fail('Array is not sorted!');
            }

            $lastNumber = $sortedArr[$i];
        }
        $this->assertTrue(true, 'Long array was sorted successfully.');
    }

}
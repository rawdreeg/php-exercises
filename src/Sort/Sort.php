<?php

namespace Rawdreeg\PhpCodingExercises\Sort;

class Sort
{
    public function sortArray(array &$array): array
    {
        $length = count($array);

        // Base case: arrays with 0 or 1 element are already sorted
        if ($length <= 1) {
            return $array;
        }

        // Select pivot (using middle element to avoid worst-case on already sorted arrays)
        $middle_index = (int)floor($length / 2);
        $middle = $array[$middle_index];

        // Remove pivot from array
        unset($array[$middle_index]);

        // Reindex array after unset
        $array = array_values($array);

        // Partition the array
        $left = [];
        $right = [];

        foreach ($array as $element) {
            if ($element <= $middle) {
                $left[] = $element;
            } else {
                $right[] = $element;
            }
        }

        // Recursively sort subarrays and combine results
        return array_merge($this->sortArray($left), [$middle], $this->sortArray($right));
    }
}


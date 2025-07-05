<?php

namespace Rawdreeg\PhpCodingExercises\SortByOrder;

class SortByOrder
{
    public function sortZeros(array $array): array
    {
        $nonZeros = [];
        $zeros = [];

        foreach ($array as $element) {
            if ($element === 0 || $element === '0') {
                $zeros[] = $element; // Collect zeros
            } else {
                $nonZeros[] = $element; // Collect non-zeros
            }
        }

        // Combine non-zeros followed by zeros
        return array_merge($nonZeros, $zeros);
    }
}
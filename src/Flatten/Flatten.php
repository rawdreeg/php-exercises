<?php

namespace Rawdreeg\PhpCodingExercises\Flatten;

class Flatten
{
    public function flatten(array $array, bool $shallow = false): array
    {
        $result = [];
        foreach ($array as $value) {
            if (is_array($value)) {
                if ($shallow) {
                    $result = array_merge($result, $value);
                } else {
                    $result = array_merge($result, $this->flatten($value));
                }
            } else {
                $result[] = $value;
            }
        }
        return $result;
    }
}
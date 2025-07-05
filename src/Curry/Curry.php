<?php

namespace Rawdreeg\PhpCodingExercises\Curry;

class Curry
{
    public function curry(callable $func, ...$initialArgs)
    {
        return function (...$args) use ($func, $initialArgs) {
            $allArgs = array_merge($initialArgs, $args);
            $reflection = new \ReflectionFunction($func);
            if ($reflection->getNumberOfParameters() <= count($allArgs)) {
                return $func(...$allArgs);
            }
            return $this->curry($func, ...$allArgs);
        };
    }
}
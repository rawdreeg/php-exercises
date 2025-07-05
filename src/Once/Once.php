<?php

namespace Rawdreeg\PhpCodingExercises\Once;

class Once
{
    private $hasBeenCalled = false;
    private $result = null;

    public function once(callable $func)
    {
        return function (...$args) use ($func) {
            if (!$this->hasBeenCalled) {
                $this->hasBeenCalled = true;
                $this->result = $func(...$args);
            }
            return $this->result;
        };
    }
}

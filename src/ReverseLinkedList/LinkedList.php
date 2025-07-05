<?php

namespace Rawdreeg\PhpCodingExercises\ReverseLinkedList;

class LinkedList
{
    public $val;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}
<?php

namespace Rawdreeg\PhpCodingExercises\InvertBinaryTree;

class BinaryNode
{
    public $value = null; // node value
    public $left = null; // left child
    public $right = null; // right child

    public function __construct($value) {
        $this->value = $value;
    }
}
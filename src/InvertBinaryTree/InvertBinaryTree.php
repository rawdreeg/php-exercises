<?php

namespace Rawdreeg\PhpCodingExercises\InvertBinaryTree;

class InvertBinaryTree
{
    public function invertTree($root)
    {
        if ($root === null) {
            return null;
        }

        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;

        $this->invertTree($root->left);
        $this->invertTree($root->right);

        return $root;
    }
}
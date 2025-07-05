<?php

use Rawdreeg\PhpCodingExercises\InvertBinaryTree\BinaryNode;
use Rawdreeg\PhpCodingExercises\InvertBinaryTree\InvertBinaryTree;

class InvertBinaryTreeTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     * Inverting a Binary tree
     *
     *      1
     *    /   
     *   2     3
     *  / \   / 
     * 4   5 6   7
     *
     * Inverts to
     *
     *      1
     *    /   
     *   3     2
     *  / \   / 
     * 7   6 5   4
     */

    public function testInvert()
    {
        $root = new BinaryNode(1);
        $rootLeftChild = new BinaryNode(2);
        $rootRightChild = new BinaryNode(3);
        $rootLeftChildLeftChild = new BinaryNode(4);
        $rootLeftChildRightNode = new BinaryNode(5);
        $rootRightChildLeftChild = new BinaryNode(6);
        $rootRightChildRightNode = new BinaryNode(7);

        $rootLeftChild->left = $rootLeftChildLeftChild;
        $rootLeftChild->right = $rootLeftChildRightNode;

        $rootRightChild->left = $rootRightChildLeftChild;
        $rootRightChild->right = $rootRightChildRightNode;

        $root->left = $rootLeftChild;
        $root->right = $rootRightChild;

        $invertBinaryTree = new InvertBinaryTree();
        $invertedTree = $invertBinaryTree->invertTree($root);

        $this->assertEquals($invertedTree->value, 1);
        $this->assertEquals($invertedTree->left->value, 3);
        $this->assertEquals($invertedTree->right->value, 2);
        $this->assertEquals($invertedTree->left->left->value, 7);
        $this->assertEquals($invertedTree->left->right->value, 6);
        $this->assertEquals($invertedTree->right->left->value, 5);
        $this->assertEquals($invertedTree->right->right->value, 4);
    }
}
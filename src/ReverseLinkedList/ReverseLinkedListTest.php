<?php

use Rawdreeg\PhpCodingExercises\ReverseLinkedList\LinkedList;
use Rawdreeg\PhpCodingExercises\ReverseLinkedList\ReverseLinkedList;

class ReverseLinkedListTest extends \PHPUnit\Framework\TestCase
{
    public function testReversed()
    {
        // Reverse a single linked list
        // List: 1 -> 2 -> 3 -> 4 -> 5 -> null
        // Reversed: 5 -> 4 -> 3 -> 2 -> 1 -> null
        $head = new LinkedList(1);
        $head->next = new LinkedList(2);
        $head->next->next = new LinkedList(3);
        $head->next->next->next = new LinkedList(4);
        $head->next->next->next->next = new LinkedList(5);

        $reverseLinkedList = new ReverseLinkedList();
        $reversedHead = $reverseLinkedList->reverse($head);

        $this->assertEquals($reversedHead->val, 5);
        $this->assertEquals($reversedHead->next->val, 4);
        $this->assertEquals($reversedHead->next->next->val, 3);
        $this->assertEquals($reversedHead->next->next->next->val, 2);
        $this->assertEquals($reversedHead->next->next->next->next->val, 1);
        $this->assertEquals($reversedHead->next->next->next->next->next, null);
    }

    public function testSimple()
    {
        $head = new LinkedList(1);
        $reverseLinkedList = new ReverseLinkedList();
        $reversedHead = $reverseLinkedList->reverse($head);
        $this->assertEquals($reversedHead->val, 1);
        $this->assertEquals($reversedHead->next, null);

        $head = new LinkedList(1);
        $head->next = new LinkedList(2);
        $reversedHead = $reverseLinkedList->reverse($head);
        $this->assertEquals($reversedHead->val, 2);
        $this->assertEquals($reversedHead->next->val, 1);
        $this->assertEquals($reversedHead->next->next, null);
    }
}
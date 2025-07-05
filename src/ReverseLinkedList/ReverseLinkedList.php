<?php

namespace Rawdreeg\PhpCodingExercises\ReverseLinkedList;

class ReverseLinkedList
{
    public function reverse(LinkedList $head)
    {
        $prev = null;
        $current = $head;

        while ($current !== null) {
            $next = $current->next; // Store next node
            $current->next = $prev; // Reverse the link
            $prev = $current;       // Move prev to current
            $current = $next;       // Move to next node
        }

        return $prev; // New head of the reversed list
    }
}
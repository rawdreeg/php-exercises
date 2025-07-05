<?php

use Rawdreeg\PhpCodingExercises\WordSearch\WordSearch;

class WordSearchTest extends \PHPUnit\Framework\TestCase
{
    public function testWordSearch()
    {
        $wordSearch = new WordSearch();
        $board = [
            ['a', 'b', 'c', 'd'],
            ['d', 'k', 'l', 'm'],
            ['m', 'f', 'b', 's']
        ];

        // Word can be constructed form letters of sequentially adjacent cell,
        // where 'adjacent' cells are those horizontally or vertically neighboring.
        $this->assertTrue($wordSearch->searchWord($board, 'abcl'));
        $this->assertTrue($wordSearch->searchWord($board, 'admfbl'));
        $this->assertTrue($wordSearch->searchWord($board, 'smdc'));
        $this->assertTrue($wordSearch->searchWord($board, 'dklm'));

        // words that doesn't exists
        $this->assertFalse($wordSearch->searchWord($board, 'dlm'));
        $this->assertFalse($wordSearch->searchWord($board, 'smdb'));

        // It's not allowed to use the same letter twice
        $this->assertFalse($wordSearch->searchWord($board, 'abcc'));
        $this->assertFalse($wordSearch->searchWord($board, 'dklml'));

        // Full board
        $this->assertTrue($wordSearch->searchWord($board, 'abcdmlkdmfbs'));
    }
}
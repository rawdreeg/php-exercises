<?php

namespace Rawdreeg\PhpCodingExercises\WordSearch;

class WordSearch
{
    private $rows;
    private $cols;
    private $wordLength;

    public function searchWord(array $board, string $word): bool
    {
        $this->rows = count($board);
        $this->cols = count($board[0]);
        $this->wordLength = strlen($word);

        // Iterate over each cell in the board
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->cols; $j++) {
                // Start DFS if the first character matches
                if ($board[$i][$j] == $word[0]) {
                    $visited = array_fill(0, $this->rows, array_fill(0, $this->cols, false));
                    if ($this->dfs($board, $word, 0, $i, $j, $visited)) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    // Helper function to perform DFS
    private function dfs($board, $word, $index, $x, $y, &$visited)
    {
        // If the entire word is matched
        if ($index == $this->wordLength) {
            return true;
        }

        // Check boundaries, visited cells, and character match
        if ($x < 0 || $x >= $this->rows || $y < 0 || $y >= $this->cols || $visited[$x][$y] || $board[$x][$y] != $word[$index]) {
            return false;
        }

        // Mark the cell as visited
        $visited[$x][$y] = true;

        // Explore all 4 possible directions (up, down, left, right)
        $directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];
        foreach ($directions as $dir) {
            if ($this->dfs($board, $word, $index + 1, $x + $dir[0], $y + $dir[1], $visited)) {
                return true;
            }
        }

        // Backtrack: unmark the cell
        $visited[$x][$y] = false;

        return false;
    }
}
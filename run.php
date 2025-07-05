<?php

use Rawdreeg\PhpCodingExercises\BasicCalculator\Calculator;
use Rawdreeg\PhpCodingExercises\Curry\Curry;
use Rawdreeg\PhpCodingExercises\Flatten\Flatten;
use Rawdreeg\PhpCodingExercises\InvertBinaryTree\InvertBinaryTree;
use Rawdreeg\PhpCodingExercises\Once\Once;
use Rawdreeg\PhpCodingExercises\ReverseLinkedList\ReverseLinkedList;
use Rawdreeg\PhpCodingExercises\Sort\Sort;
use Rawdreeg\PhpCodingExercises\SortByOrder\SortByOrder;
use Rawdreeg\PhpCodingExercises\WordSearch\WordSearch;

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "Please run 'composer install' to set up the project dependencies.\n";
    exit(1);
}

require __DIR__ . '/vendor/autoload.php';

$exercises = [
    'basic-calculator' => Calculator::class,
    'curry' => Curry::class,
    'flatten' => Flatten::class,
    'invert-binary-tree' => InvertBinaryTree::class,
    'once' => Once::class,
    'reverse-linked-list' => ReverseLinkedList::class,
    'sort' => Sort::class,
    'sort-by-order' => SortByOrder::class,
    'word-search' => WordSearch::class,
];

if ($argc < 2) {
    echo "Usage: php run.php <exercise-name>\n";
    echo "Available exercises: \n";
    foreach ($exercises as $name => $class) {
        echo "- $name\n";
    }
    exit(1);
}

$exerciseName = $argv[1];

if (!isset($exercises[$exerciseName])) {
    echo "Exercise '$exerciseName' not found.\n";
    exit(1);
}

$className = $exercises[$exerciseName];
$instance = new $className();

echo "Running exercise: $exerciseName\n";

// Here you can add the logic to execute the exercise
// For now, it just instantiates the class


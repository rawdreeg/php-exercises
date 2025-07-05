# PHP Exercises

This repository is a fork of `https://github.com/anacouto/php-exercises.git`, updated with a modern PHP stack and testing setup. Unlike the original, this fork includes my implementations for each exercise alongside the provided test cases.

It contains a collection of basic and advanced PHP coding exercises and interview questions, implemented using a Test-Driven Development (TDD) approach. Each exercise includes its own test file to validate the solution.

## How to Run Tests

To run all tests for the project, execute the following command from the root directory:

```bash
php test.php
```

To run tests for a specific exercise, use the `--filter` option followed by the test class name. The test class name typically follows the pattern `[ExerciseName]Test`.

For example, to run tests for the `BasicCalculator` exercise:

```bash
php test.php --filter "BasicCalculatorTest"
```

You can also filter by a specific test method within a class:

```bash
php test.php --filter "BasicCalculatorTest::testBasicCalculations"
```

## Exercises

Here's a list of the exercises included in this repository:

*   **BasicCalculator**: Implements a basic calculator that can handle addition, subtraction, and parentheses.
*   **Curry**: Demonstrates function currying in PHP.
*   **Flatten**: Provides a function to flatten nested arrays.
*   **InvertBinaryTree**: Contains an algorithm to invert a binary tree.
*   **Once**: Implements a function that ensures another function is called only once.
*   **ReverseLinkedList**: Reverses a singly linked list.
*   **Sort**: Implements various sorting algorithms.
*   **SortByOrder**: Sorts an array by moving specific elements (e.g., zeros) to the end.
*   **WordSearch**: Solves a word search puzzle on a given board.

## Dependencies

This project uses PHPUnit for testing. Dependencies are managed with Composer.

## Workflow

1.  Clone the repository:
    ```bash
    git clone https://github.com/anacouto/php-exercises.git
    ```
2.  Navigate into the project directory:
    ```bash
    cd php-exercises
    ```
3.  Install Composer dependencies:
    ```bash
    composer install
    ```
4.  Run all tests:
    ```bash
    php test.php
    ```
5.  To explore a specific exercise's solution, you can examine the implementation files within its `src/` subdirectory (e.g., `src/BasicCalculator/Calculator.php`).

## How to Run Exercises

To run and observe the output of an individual exercise's solution, use the `run.php` script followed by the exercise name. This script will instantiate the exercise's main class, allowing you to call its methods and see the results.

For example, to run the `BasicCalculator` exercise:

```bash
php run.php basic-calculator
```

Note: The `run.php` script currently instantiates the exercise class. You may need to add specific calls to methods within the exercise's implementation file to produce visible output when run via `run.php`.

6.  Run all tests:
    ```bash
    php test.php
    ```
<?php

// This script executes the PHPUnit test runner.

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "Please run 'composer install' to set up the project dependencies.\n";
    exit(1);
}

require __DIR__ . '/vendor/autoload.php';

$phpunitBinary = __DIR__ . '/vendor/bin/phpunit';

// Check if PHPUnit binary exists
if (!file_exists($phpunitBinary)) {
    echo "PHPUnit is not installed. Please run 'composer install'.\n";
    exit(1);
}

// Build the command to run PHPUnit, explicitly using phpunit.xml
$command = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg($phpunitBinary) . ' -c phpunit.xml';

// Pass any additional arguments to PHPUnit
if ($argc > 1) {
    $command .= ' ' . implode(' ', array_map('escapeshellarg', array_slice($argv, 1)));
}

passthru($command, $exitCode);

exit($exitCode);


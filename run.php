<?php

require_once __DIR__ . '/vendor/autoload.php';

use Minesweeper\File;
use Minesweeper\Reader;

echo "Minesweeper is running!" . PHP_EOL;

$filePath = $argv[1];

$file = new File($filePath);

$reader = new Reader($file);

// iterate the file
// maybe line by line
// collect mines found
// feed board data
// sum it up rendering the board

echo "Minesweeper has ended gracefully!" . PHP_EOL;

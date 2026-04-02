<?php

require_once __DIR__ . '/vendor/autoload.php';

use Minesweeper\File;

echo "Minesweeper is running!" . PHP_EOL;

$filePath = $argv[1];

$file = new File($filePath);

echo $file->content(). PHP_EOL;

echo "Minesweeper has ended gracefully!" . PHP_EOL;

<?php

namespace Minesweeper;

class File {
    private string $content;

    public function __construct(string $filePath)
    {
        if (!file_exists($filePath)) {
            throw new \Exception(sprintf('File not found at path: %s', $filePath));
        }

        $content = file_get_contents($filePath);

        if ($content === false) {
            throw new \Exception(sprintf('Error reading file at path: %s', $filePath));
        }

        $this->content = $content;
    }

    public function content(): string {
        return $this->content;
    }

    public function line(int $index = 0): string
    {
        $parts = explode("\n", $this->content);

        return $parts[$index];
    }

    public function lineExists(int $index)
    {
        $parts = explode("\n", $this->content);

        return array_key_exists($index, $parts);
    }
}

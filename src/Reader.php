<?php

namespace Minesweeper;

class Reader {
    private File $file;
    private int $line;

    public function __construct(File $file)
    {
        if (is_null($file)) {
            throw new \Exception('File instance is invalid.');
        }

        $this->file = $file;
        $this->line = 0;
    }

    public function current()
    {
        return $this->file->line($this->line);
    }

    public function next()
    {
        $this->advance();

        return $this->current();
    }

    private function advance()
    {
        if(!$this->canAdvance()) {
            throw new \Exception('EOF reached, cannot advance'); 
        }

        $this->line++;
    }

    private function canAdvance()
    {
        $newLine = $this->line + 1;

        return $this->file->lineExists($newLine);
    }
}

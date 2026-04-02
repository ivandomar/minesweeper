<?php

namespace Minesweeper;

class Parser {
    const MINE_CHAR = 'x';

    /**
     * @return int[] Array of mine positions in given stream
     */
    public static function run(String $stream): array
    {
        $positions = [];
        $chars = str_split($stream);

        foreach($chars as $position => $char) {
            if (self::isMine($char)) {
                $positions[] = $position;
            }
        }

        return $positions;
    }

    private static function isMine($char)
    {
        return $char === self::MINE_CHAR;
    }
}

<?php

namespace App\Helpers\Parsers;

class CharPairsParser extends Parser
{
    private $charPairs;

    public function __construct()
    {
        $this->charPairs = config('main.parsers.char_pairs');
    }

    public function parse(string $string): string
    {
        /**
         ** Strings with less than 2 characters cannot match a pair
         */
        $length = strlen($string);
        if ($length > 1) {
            $firstChar = $string[0];
            $lastChar = $string[$length - 1];
            $pair = "{$firstChar}{$lastChar}";
            if (in_array($pair, $this->charPairs)) {
                $substring = substr($string, 1, -1);
                return $this->parse($substring);
            }
        }
        return $string;
    }
}

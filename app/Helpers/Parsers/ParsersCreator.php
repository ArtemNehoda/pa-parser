<?php

namespace App\Helpers\Parsers;

use App\Helpers\Parsers\BracketsParser;
use App\Helpers\Parsers\CharPairsParser;
use App\Helpers\Parsers\Interfaces\ParserInterface;
use Exception;

class ParsersCreator
{

    public function getParser(string $type): ParserInterface
    {
        if ($type == 'bracketsParser') {
            return new BracketsParser;
        }

        if ($type == 'chairPairsParser') {
            return new CharPairsParser;
        }

        throw new Exception("Parser not found");
    }
}

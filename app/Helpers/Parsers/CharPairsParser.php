<?php

namespace App\Helpers\Parsers;

use App\Helpers\Parsers\Interfaces\ParserInterface;

class CharPairsParser implements ParserInterface
{
    public function parse(string $string): string
    {
        return "test";
    }

    public function parseAll(array $strings): array
    {
        return ["test" => "testparsed"];
    }
}

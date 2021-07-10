<?php

namespace App\Services;

use App\Helpers\Parsers\ParsersCreator;

class ParserService
{
    public function __construct()
    {
        $this->parsersCreator = new ParsersCreator;
    }

    public function parseAll(array $strings, string $parserType): array
    {
        $parser = $this->parsersCreator->getParser($parserType);
        return $parser->parseAll($strings);
    }
}

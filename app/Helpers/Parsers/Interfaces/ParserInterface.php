<?php

namespace App\Helpers\Parsers\Interfaces;

interface ParserInterface
{
    public function parse(string $string): string;

    public function parseAll(array $strings): array;
}

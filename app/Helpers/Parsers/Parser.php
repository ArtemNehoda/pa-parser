<?php

namespace App\Helpers\Parsers;

use App\Helpers\Parsers\Interfaces\ParserInterface;

abstract class Parser implements ParserInterface
{
    public function parseAll(array $strings): array
    {
        $result = [];
        foreach ($strings as $value) {
            $result[$value] = $this->parse($value);
        }
        return $result;
    }
}

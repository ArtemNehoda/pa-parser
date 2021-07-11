<?php

namespace App\Services;

use App\Helpers\Parsers\ParsersCreator;
use App\Models\ParserResult;
use Illuminate\Support\Str;

class ParserService
{
    public function __construct()
    {
        $this->parsersCreator = new ParsersCreator;
        $this->parserResult = new ParserResult;
    }

    public function parseAll(array $strings, string $parserType): array
    {
        $parser = $this->parsersCreator->getParser($parserType);
        return $parser->parseAll($strings);
    }

    /**
     ** Parse @var $strings with @var $parserType parser and save result to db.
     ** @return string token
     */
    public function saveAsParsed(array $strings, string $parserType): string
    {
        $data = $this->parseAll($strings, $parserType);
        $parserResult = $this->parserResult::create([
            'parser' => $parserType,
            'token' => Str::random(config('main.parsers.token_length')),
            'data' => $data
        ]);
        return $parserResult->token;
    }

    public function getParsedResult(string $token): object
    {
        $parserResult = $this->parserResult::where('token', $token)->first();
        return $parserResult ?? null;
    }
}

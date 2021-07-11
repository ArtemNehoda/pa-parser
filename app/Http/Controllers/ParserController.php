<?php

namespace App\Http\Controllers;

use App\Services\ParserService;
use App\Http\Requests\ParseRequest;

class ParserController extends Controller
{
    public function __construct(ParserService $parserService)
    {
        $this->parserService = $parserService;
    }

    public function showBracketsParser()
    {
        return view('parser.brackets');
    }

    public function parseBrackets(ParseRequest $request)
    {
        return $this->parse($request->strings, 'bracketsParser');
    }

    public function showPairsEnParser()
    {
        return view('parser.pairs_en');
    }

    public function parsePairsEn(ParseRequest $request)
    {
        return $this->parse($request->strings, 'charPairsParser');
    }

    private function parse(array $strings, string $parserType)
    {
        $data = collect($strings)->filter(function ($string) {
            return !empty($string);
        })->toArray();
        $token = $this->parserService->saveAsParsed($data, $parserType);
        return redirect(route('parser.results.show', $token));
    }

    public function showResult($token)
    {
        $parsedResult = $this->parserService->getParsedResult($token);
        return view('parser.result', compact('parsedResult'));
    }
}

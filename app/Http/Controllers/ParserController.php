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

    public function parseBrackets(ParseRequest $request){
        $result = $this->parserService->parseAll($request->strings, 'bracketsParser');
        dd($result);
    }

    public function showPairsEnParser()
    {
        return view('parser.pairs_en');
    }

    public function parsePairsEn(ParseRequest $request){
        $result = $this->parserService->parseAll($request->strings, 'charPairsParser');
        dd($result);
    }

    public function showResult(){

    }
}

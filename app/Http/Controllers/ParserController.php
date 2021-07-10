<?php

namespace App\Http\Controllers;

class ParserController extends Controller
{
    public function showBracketsParser()
    {
        return view('brackets');
    }

    public function showPairsEnParser()
    {
        return view('pairs_en');
    }
}

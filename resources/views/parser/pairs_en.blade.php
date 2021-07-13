@extends('layouts.main')
@section('content')
@php
$details ='Enter one or more strings below and then click on "parse" to see the result.<br>Char Pairs: <strong>' .
    implode(' ,',config('main.parsers.char_pairs')).'</strong>';
@endphp
@component('components.parser_container', ['title' => 'Char Pairs parser', 'description' => 'This parser eliminates all
the outer letter pairs shown below', 'details'
=> $details])
@include('includes.parser_form', ['parserRoute' => route('parser.pairs_en.parse')])
@endcomponent
@endsection

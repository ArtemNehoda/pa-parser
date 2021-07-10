@extends('layouts.main')
@section('content')
@component('components.parser_container', ['title' => 'Char Pairs parser', 'description' => 'Some description', 'details'
=> 'Some details'])
@include('includes.parser_form', ['parserRoute' => route('parser.pairs_en.parse')])
@endcomponent
@endsection

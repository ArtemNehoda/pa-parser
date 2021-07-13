@extends('layouts.main')
@section('content')
@component('components.parser_container', ['title' => 'BracketsParser', 'description' => 'This parser strips all outer
brackets from a string', 'details'
=> 'Enter one or more strings below and then click on "parse" to see the result'])
@include('includes.parser_form', ['parserRoute' => route('parser.brackets.parse')])
@endcomponent
@endsection

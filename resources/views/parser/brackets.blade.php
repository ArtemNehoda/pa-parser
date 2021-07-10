@extends('layouts.main')
@section('content')
@component('components.parser_container', ['title' => 'BracketsParser', 'description' => 'Some description', 'details'
=> 'Some details'])
@include('includes.parser_form', ['parserRoute' => route('parser.brackets.parse')])
@endcomponent
@endsection

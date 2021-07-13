@extends('layouts.main')
@section('content')
@php
    $parserName = null;
    if($parsedResult->parser == 'bracketsParser'){
        $parserName = 'Brackets Parser';
    }
    if($parsedResult->parser == 'charPairsParser'){
        $parserName = 'Char Pairs Parser';
    }
@endphp
@component('components.parser_container', ['title' => 'Operation completed<i class="fas fa-lg fa-spell-check ml-2"></i>', 'description' => "Your strings have been parsed with {$parserName}", 'details'
=> 'Here is the result:'])
<div>
    @csrf
    <div class="row mt-2">
        <div class="col-12">
            <label for="exampleInputEmail1">Parsed strings</label>
        </div>
    </div>
    @foreach ($parsedResult->data as $originalString => $parsedString)
    <div class="row mt-2">
        <div class="col-6 d-none d-sm-flex">
            <input type="text" value="{{$originalString}}" class="form-control form-control-sm" readonly>
            <i class="fas fa-lg mt-2 fa-arrow-right ml-4"></i>
        </div>
        <div class="col-6 d-none d-sm-flex col-12 col-sm-6 d-flex flex-row">
            <input type="text" value="{{$parsedString}}" readonly class="form-control form-control-sm"
                value="Press parse to see the result here">
            <i class="fas fa-lg fa-check ml-3 mt-2 text-success"></i>
        </div>
    </div>
    @endforeach
    <hr>
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-column justify-content-center align-items-center">
            <p>Copy this link to download the pdf file later, or click on "download PDF" to download it now</p>
            <p><i class="fas fa-exclamation-circle mr-2 text-info"></i>This link will be valid for {{config('main.parsers.token_expires_in') > 1 ? (config('main.parsers.token_expires_in'). ' days') : (config('main.parsers.token_expires_in'). ' day')}}, starting from today</p>
        </div>
        <div class="col-12 d-flex flex-row justify-content-center">
            <div class="input-group mb-3 ">
                <input type="text" readonly class="form-control"
                    value="{{route('parser.results.download', $parsedResult->token)}}">
                <div class="input-group-append">
                    <a class="btn btn-secondary" href="{{route('parser.results.download', $parsedResult->token)}}">Download PDF<i class="fas fa-file-pdf ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endcomponent
@endsection

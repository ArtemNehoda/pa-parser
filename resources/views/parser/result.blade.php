@extends('layouts.main')
@section('content')
@component('components.parser_container', ['title' => 'Result', 'description' => 'Your strings are parsed', 'details'
=> 'You can download a pdf file'])
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
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">
            <p>Copy this link to download your strings as a square spiral in pdf</p>
        </div>
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">
            <div class="input-group mb-3 ">
                <input type="text" readonly class="form-control" placeholder="Recipient's username"
                    value="https://download.link" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button" id="button-addon2">Download PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endcomponent
@endsection

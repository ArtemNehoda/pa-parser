@extends('layouts.main')
@section('content')
@component('components.parser_container', ['title' => 'Result', 'description' => 'Your strings are parsed', 'details'
=> 'You can download a pdf file'])
<div>
    @csrf
    <div class="row mt-2">
        <div class="col-12 col-md-8 offset-md-2">
            <label for="exampleInputEmail1">Parsed strings</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">

            <input type="text" name="strings[]" readonly class="form-control form-control-sm"><a><i
                    class="fas fa-check ml-3 text-success"></i></a>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">
            <p>Copy this link to download your strings as a square spiral in pdf</p>
        </div>
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">
            <div class="input-group mb-3 ">
                <input type="text" readonly class="form-control" placeholder="Recipient's username" value="https://download.link"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button" id="button-addon2">Download PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endcomponent
@endsection

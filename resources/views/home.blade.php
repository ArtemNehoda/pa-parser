@extends('layouts.main')
@section('content')
<div class="container h-75 d-flex flex-row justify-content-center align-items-center p-2">
        <div class="row justify-content-center d-flex flex-column align-items-center mt-5">
            <h1>Welcome to @include('includes.brand')</h1>
            <h5 class="text-center text-muted">Pa parser is a mini web application that allows you to parse strings</h5>
            <h5 class="mt-3">Choose how you want to proceed:</h5>
            <div class="d-flex flex-column p-2">
                <a href="{{route('parser.brackets.show')}}" class="btn btn-primary btn-lg font-weight-bold mt-3" role="button" aria-pressed="true">I want to parse brackets</a>
                <a href="{{route('parser.brackets.show')}}" class="btn btn-primary btn-lg font-weight-bold mt-3" role="button" aria-pressed="true">I want to parse char pairs</a>
            </div>

        </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
<div class="container h-75 d-flex flex-row justify-content-center align-items-center p-2">
    <div class="mt-5 col-12">
        <div class="text-center">
            <h3>Char Pairs parser</h3>
            <p>Some description</p>
            <small class="text-muted">Some details</small>
        </div>
        <form>
            <div class="row mt-2">
                <div class="col-12">
                    <label for="exampleInputEmail1">String to parse</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-10">

                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col-2">
                    <a><i class="fas fa-trash-alt ml-2"></i></a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-10">

                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col-2">
                    <a><i class="fas fa-trash-alt ml-2"></i></a>
                </div>
            </div>
            <div class="row my-3 justify-content-center">
                <div class="col-12">
                    <a href="#">Add row +</a>
                </div>
            </div>
            <div class="row my-3 justify-content-center">
                <button type="submit" class="btn btn-primary">Parse</button>
            </div>
        </form>
    </div>
</div>
@endsection

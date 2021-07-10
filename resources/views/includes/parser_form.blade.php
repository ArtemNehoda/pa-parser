<form action="{{$parserRoute}}" method="POST">
    @csrf
    <div class="row mt-2">
        <div class="col-12 col-md-8 offset-md-2">
            <label for="exampleInputEmail1">String to parse</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-md-8 offset-md-2 d-flex flex-row justify-content-center">

            <input type="text" name="strings[]" required class="form-control form-control-sm"><a><i class="fas fa-trash-alt ml-3"></i></a>
        </div>
    </div>
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-md-8">

            <a href="#">Add row +</a>
        </div>
    </div>
    @include('includes.errors')
    <div class="row my-3 justify-content-center">
        <button type="submit" class="btn btn-primary">Parse</button>
    </div>
</form>

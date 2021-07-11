<form action="{{$parserRoute}}" method="POST" id="parser-form">
    @csrf
    <div class="row mt-2">
        <div class="col-12">
            <h6>Strings to parse:</h6>
        </div>
    </div>
    <div id="parser-rows-block">
        <div class="row mt-2 input-block">
            <div class="col-12 col-sm-6 d-flex flex-row">
                <input type="text" name="strings[]" required placeholder="write here..." class="form-control form-control-sm">
                <i class="fas fa-lg mt-2 fa-arrow-right ml-4 d-none d-sm-inline"></i>
                <button type="button" class="btn btn-link p-0 m-0 remove-block-btn d-sm-none">
                    <i class="text-dark fas fa-trash-alt ml-3"></i>
                </button>
            </div>
            <div class="col-6  d-none d-sm-flex">
                <input type="text" readonly class="form-control form-control-sm"
                    value="Press parse to see the result here"><button type="button"
                    class="btn btn-link p-0 m-0 remove-block-btn"><i
                        class="text-dark fas fa-trash-alt ml-3"></i></button>
            </div>
        </div>
    </div>
    <div class="row my-3 justify-content-center">
        <div class="col-12">
            <button type="button" class="btn btn-link p-0 m-0" id="add-row-btn">Add another string<i
                    class="fas fa-plus ml-2"></i></button>
        </div>
    </div>
    @include('includes.errors')
    <div class="row my-3 justify-content-center">
        <button type="submit" class="btn btn-primary font-weight-bold">PARSE</button>
    </div>
</form>
@section('scripts')
<script src="{{asset('js/parser-form.js')}}"></script>
@endsection

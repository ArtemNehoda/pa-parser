@if ($errors->any())
<div class="col">
    <div class="alert alert-danger" role="alert">
        {!! $errors->first() !!}
    </div>
</div>
@endif

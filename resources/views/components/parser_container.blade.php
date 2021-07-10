<div class="container h-75 d-flex flex-row justify-content-center align-items-center p-2">
    <div class="mt-5 col-12">
        <div class="text-center">
            <h3>{{$title}}</h3>
            <p>{{$description}}</p>
            <small class="text-muted">{{$details}}</small>
        </div>
        {{$slot}}
    </div>
</div>

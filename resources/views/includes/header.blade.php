<nav class="navbar navbar-expand-lg navbar-light bg-light text-white">
    <a class="navbar-brand text-dark font-weight-bold" href="#">@include('includes.brand')</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-center">
        <li class="nav-item">
          <a class="nav-link font-weight-bold {{url()->current() == route('home.show') ? 'text-primary' : ''}}" href="{{route('home.show')}}">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold {{url()->current() == route('parser.brackets.show') ? 'text-primary' : ''}}" href="{{route('parser.brackets.show')}}">Brackets parser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold {{url()->current() == route('parser.pairs_en.show') ? 'text-primary' : ''}}" href="{{route('parser.pairs_en.show')}}">Char Pairs Parser</a>
        </li>
      </ul>
    </div>
  </nav>

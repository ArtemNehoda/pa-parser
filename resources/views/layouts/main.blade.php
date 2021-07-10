<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')

<body>
    <main style="min-height: 90% !important;">
        @include('includes.header')
        @yield('content')
        @yield('scripts')
    </main>
</body>
@include('includes.footer')

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div id="app">
        @guest
            @include('partials.menuSinAut')
        @else
            @include('partials.menuAut')
        @endguest
        @yield('cabecera')
        <main class="py-4">
            @yield('content')
        </main>
         @include('partials.footer')
    </div>
</body>
</html>

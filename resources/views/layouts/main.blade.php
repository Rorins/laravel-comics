<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- IMPORT SASS STYLES, questi finiranno nella cartella public e nel css, guardare webpack --}}
    {{-- per puntare alla public si usa sempre assets --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- Parte da views e con il . passiamo a header --}}
    @include('partials.header')
    
    {{-- contenuto che cambierà di volta in volta --}}
    <main>
        @yield('main-content')
    </main>

    {{-- Parte da views e con il . passiamo a header --}}
    @include('partials.footer')
</body>
</html>
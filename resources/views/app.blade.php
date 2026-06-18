<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $defaultTitle = 'Separafilt | separación de partículas  y filtración' . config('seo.country');
        $defaultDescription =
            'Diseño, fabricación y comercialización de equipos industriales de separación de partículas sólidas en 
            líquidos y filtración de partículas sólidas en líquidos y gases' . config('seo.country');
        ' y ' .
            config('seo.region') .
            '. Separafilt se dedicada al diseño, fabricación y comercialización de equipos industriales de separación de partículas sólidas en líquidos y filtración de partículas sólidas en líquidos y gases.';
        $defaultOgImage = asset('img/separafilt.png');
    @endphp

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>@yield('title', $defaultTitle)</title>
    {{--  <meta name="description" content="@yield('meta_description', $defaultDescription)"> --}}
    {{--  <meta name="robots" content="@yield('robots_meta', 'index,follow')"> --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
    <!--Fin del enlace a la carpeta de public/css -->
</head>

<body data-theme="dark">

    <div class="mainContent contenedor">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
    <script src="{{ asset('js/theme.js') }}" defer></script>
</body>

</html>

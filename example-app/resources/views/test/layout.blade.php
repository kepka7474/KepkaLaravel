<!DOTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocate()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizda blya</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div class="flex-center position-ref full-heigth">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>

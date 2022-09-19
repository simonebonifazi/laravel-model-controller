<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller Demo</title>

    @yield('cdns')

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- js -->
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>

    </header>
    <main>
        @yield('main-content')
    </main>
    <footer></footer>
</body>

</html>
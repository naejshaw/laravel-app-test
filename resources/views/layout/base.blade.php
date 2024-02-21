<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} :: @yield('title')</title>
</head>
<body>

    <div class="logo">
        <img src="{{asset('img/logo-ominichannel.png')}}" alt="Ominichannel">
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Ominichannel - 2024</p>
    </footer>
</body>
</html>

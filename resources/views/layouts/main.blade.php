<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>

<body>
    @include('includes.header')
    <main>
        <div class="container">
            @yield('main-content')
        </div>
    </main>
</body>
</html>

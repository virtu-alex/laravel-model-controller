<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <ul>
                        <li> Image: <img src="{{ $movie->cover }}" alt="{{ $movie->title }}">
                        <li> Original Title: {{ $movie->original_title }}</li>
                        <li> Date: {{ $movie->date }}</li>
                        <li> Vote: {{ $movie->vote }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>

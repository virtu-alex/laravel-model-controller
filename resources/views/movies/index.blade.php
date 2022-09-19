<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card bg-dark text-white m-3">
                        <ul>
                            <li> Original Title: {{ $movie->original_title }}</li>
                            <li> Title: {{ $movie->title }}</li>
                            <li> Nationality: {{ $movie->nationality }}</li>
                            <li> Date: {{ $movie->date }}</li>
                            <li> Vote: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie details</title>
</head>
<body>
    <h5><a href="{{route('home')}}">Home</a></h5>
    <h1>Movie details</h1>
    <h3>{{$movie -> title}}. {{$movie -> subtitle}}</h3>
    <h5>Data di uscita: {{$movie -> release_date}}</h5>
</body>
</html>
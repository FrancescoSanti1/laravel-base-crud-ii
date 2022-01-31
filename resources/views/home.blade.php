<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Home</title>
</head>
<body>
    <h1>Movie Home</h1>
    <h3>
        <a href="{{route('create')}}">Aggiungi un nuovo film</a>
    </h3>
    <ul>
    @foreach ($movies as $movie)
        <li>
            <a href="{{route('show', $movie -> id)}}">{{$movie -> title}}</a> - data di uscita: {{$movie -> release_date}}
            <a href="{{route('update', $movie -> id)}}">modifica</a>
            <a href="{{route('delete', $movie -> id)}}">elimina</a>
        </li>    
    @endforeach
    </ul>
</body>
</html>
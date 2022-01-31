<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifica film</title>
</head>
<body>
    <h2>Modifica i dati del film</h2>
    <form action="{{route('edit', $movie->id)}}" method="post">
        @method("POST")
        @csrf
        <input type="text" name="title" value="{{$movie->title}}"><br>
        <input type="text" name="subtitle" value="{{$movie->subtitle}}"><br>
        <input type="date" name="release_date" value="{{$movie->release_date}}"><br>
        <input type="submit" value="Modifica">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
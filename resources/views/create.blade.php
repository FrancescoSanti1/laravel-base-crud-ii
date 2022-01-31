<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aggiungi film</title>
</head>
<body>
    <h2>Aggiungi un nuovo film</h2>
    <form action="{{route('store')}}" method="post">
        @method("POST")
        @csrf
        <input type="text" name="title" placeholder="Inserisci il titolo"><br>
        <input type="text" name="subtitle" placeholder="Inserisci il sottotitolo"><br>
        <input type="date" name="release_date" placeholder="Inserisci la data di uscita"><br>
        <input type="submit" value="Conferma">
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
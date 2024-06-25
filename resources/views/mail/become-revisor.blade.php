<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <div>
        <h1>Il seguente utente ha chiesto di lavorare con noi come revisore</h1>
        <h2>Ecco i suoi dati: </h2>
        <p>Nome: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Clicca qui se vuoi renderl* revisore: </p>
        <a href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>
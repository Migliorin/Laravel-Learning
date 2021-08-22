<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <div>
        <h1>Bem vindo ao menu principal</h1>
        <ul>
            <li>
                <a href="{{route('site.index')}}">Principal</a>
            </li>
            <li>
                <a href="{{route('site.sobrenos')}}">Sobre nos</a>
            </li>
            <li>
                <a href="{{route('site.contato')}}">Contato</a>
            </li>
        </ul>
    <div>
</body>
</html>
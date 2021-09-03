<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Series Guide</title>
    </head>
    <body>
        <ul>
            @foreach($series as $serie)
                <li>{{ $serie }}</li>
            @endforeach
        </ul>
    </body>
</html>

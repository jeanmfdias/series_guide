<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Series Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<br>
<div class="container">
    <div class="jumbotron">
        <h1>Series</h1>
    </div>
    <div class="form-group">
        <a href="" class="btn btn-primary">Adicionar</a>
    </div>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

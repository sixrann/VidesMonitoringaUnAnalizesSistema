<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Gaiss ierakstu dati(detalizeti)</h2>
            <h5>ID</h5><p>{{ $gaiss->id }}</p>
            <h5>Vietas Nosaukums</h5><p>{{ $gaiss->Vietas ? $gaiss->Vietas->Nosaukums : '' }}</p>
            <h5>Datums</h5><p>{{ $gaiss->Datums }}</p>
            <h5>Laiks</h5><p>{{ $gaiss->Laiks }}</p>
            <h5>Temperatura</h5><p>{{ $gaiss->Temperatura }}</p>
            <h5>Mitrums</h5><p>{{ $gaiss->Mitrums }}</p>
            <h5>Putekli</h5><p>{{ $gaiss->Putekli }}</p>
            <h5>Smakas</h5><p>{{ $gaiss->Smakas }}</p>
            <h5>Mikroorganismi</h5><p>{{ $gaiss->Mikroorganismi }}</p>
            <a href="/allData/gaisakvalitate/{{$gaiss->id}}/delete" class="btn btn-danger ms-2">Dzēst ierakstu</a>
            <a href="/allData/gaisakvalitate" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
    </div>

    @include('inc.footer')

</body>
</html>

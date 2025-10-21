<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Ūdens ierakstu dati(detalizeti)</h2>
            <h5>ID</h5><p>{{ $udens->id }}</p>
            <h5>Vietas Nosaukums</h5><p>{{ $udens->Vietas ? $udens->Vietas->Nosaukums : '' }}</p>
            <h5>Datums</h5><p>{{ $udens->Datums }}</p>
            <h5>Laiks</h5><p>{{ $udens->Laiks }}</p>
            <h5>Temperatura</h5><p>{{ $udens->Temperatura }}</p>
            <h5>pH</h5><p>{{ $udens->pH }}</p>
            <h5>Dzelzs</h5><p>{{ $udens->Dzelzs }}</p>
            <h5>Mangans</h5><p>{{ $udens->Mangans }}</p>
            <h5>Fosfati</h5><p>{{ $udens->Fosfati }}</p>
            <h5>Nitrati</h5><p>{{ $udens->Nitrati }}</p>
            <h5>Nitriti</h5><p>{{ $udens->Nitriti }}</p>
            <h5>Mikroorganismi</h5><p>{{ $udens->Mikroorganismi }}</p>
            <a href="/allData/udenskvalitate/{{$udens->id}}/delete" class="btn btn-danger ms-2">Dzēst ierakstu</a>
            <a href="/allData/udenskvalitate" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
    </div>

    @include('inc.footer')

</body>
</html>

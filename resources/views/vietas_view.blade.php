<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Vietas ierakstu dati(detalizeti)</h2>
            <h5>ID</h5><p>{{ $vietas->id }}</p>
            <h5>Vietas nosaukums</h5><p>{{ $vietas->Nosaukums }}</p>
            <h5>Apraksts</h5><p>{{ $vietas->Apraksts }}</p>
            <a href="/allData/vietas/{{$vietas->id}}/delete" class="btn btn-danger ms-2">Dzēst ierakstu</a>
            <a href="/allData/vietas" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
    </div>

    @include('inc.footer')

</body>
</html>

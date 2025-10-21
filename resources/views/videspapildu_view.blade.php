<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Vides Papildu ierakstu dati(detalizeti)</h2>
            <h5>ID</h5><p>{{ $papildu->id }}</p>
            <h5>Vietas Nosaukums</h5><p>{{ $papildu->Vietas ? $papildu->Vietas->Nosaukums : '' }}</p>
            <h5>Datums</h5><p>{{ $papildu->Datums }}</p>
            <h5>Laiks</h5><p>{{ $papildu->Laiks }}</p>

            <a href="/allData/videspapildu/{{$papildu->id}}/delete" class="btn btn-danger ms-2">Dzēst ierakstu</a>
            <a href="/allData/videspapildu" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
    </div>

    @include('inc.footer')

</body>
</html>

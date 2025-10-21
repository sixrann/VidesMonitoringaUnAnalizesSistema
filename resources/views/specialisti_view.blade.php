<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Specialīstu ierakstu dati(detalizeti)</h2>
            <h5>ID</h5><p>{{ $specialist->id }}</p>
            <h5>Vārds/Uzvārds</h5><p>{{ $specialist->Vards }} {{ $specialist->Uzvards }}</p>
            <h5>Specializācija</h5><p>{{ $specialist->Specializacija }}</p>
            <h5>Darba Dienas</h5><p>{{ $specialist->DarbaDienas }}</p>
            <h5>Telefona Numurs</h5><p>{{ $specialist->TelefonaNumurs }}</p>
            <a href="/allData/specialisti/{{$specialist->id}}/delete" class="btn btn-danger ms-2">Dzēst ierakstu</a>
            <a href="/allData/specialisti" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
    </div>

    @include('inc.footer')

</body>
</html>

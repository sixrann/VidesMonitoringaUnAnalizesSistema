<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Pievienot jaunu vietas ierakstu</h2>
        <form method="POST" action="/allData/vietas">
            @csrf
            <div class="mb-3">
                <label for="Nosaukums" class="form-label">Nosaukums</label>
                <input type="text" class="form-control" id="Nosaukums" name="Nosaukums" required>
            </div>
            <div class="mb-3">
                <label for="Apraksts" class="form-label">Apraksts</label>
                <input type="text" class="form-control" id="Apraksts" name="Apraksts" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/vietas" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

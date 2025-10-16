<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Pievienot jaunu specialista ierakstu</h2>
        <form method="POST" action="/allData/specialisti">
            @csrf
            <div class="mb-3">
                <label for="Vards" class="form-label">Vārds</label>
                <input type="text" class="form-control" id="Vards" name="Vards" required>
            </div>
            <div class="mb-3">
                <label for="Uzvards" class="form-label">Uzvārds</label>
                <input type="text" class="form-control" id="Uzvards" name="Uzvards" required>
            </div>
            <div class="mb-3">
                <label for="Specializacija" class="form-label">Specializācija</label>
                <input type="text" class="form-control" id="Specializacija" name="Specializacija" required>
            </div>
            <div class="mb-3">
                <label for="DarbaDienas" class="form-label">Darba Dienas</label>
                <input type="text" class="form-control" id="DarbaDienas" name="DarbaDienas" required>
            </div>
            <div class="mb-3">
                <label for="TelefonaNumurs" class="form-label">Telefona Numurs</label>
                <input type="text" class="form-control" id="TelefonaNumurs" name="TelefonaNumurs" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/specialisti" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

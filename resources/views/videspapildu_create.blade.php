<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Pievienot jaunu vides papildu ierakstu</h2>
        <form method="POST" action="/allData/videspapildu">
            @csrf
            <div class="mb-3">
                <label for="VietasID" class="form-label">Vietas Nosaukums</label>
                <select class="form-select" id="VietasID" name="VietasID" required>
                    <option value="" disabled selected>Izvēlieties vietas nosaukumu</option>
                    @foreach ($vietas as $vieta)
                        <option value="{{ $vieta->id }}">{{ $vieta->Nosaukums }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Datums" class="form-label">Datums</label>
                <input type="date" class="form-control" id="Datums" name="Datums" required>
            </div>
            <div class="mb-3">
                <label for="Laiks" class="form-label">Laiks</label>
                <input type="time" class="form-control" id="Laiks" name="Laiks" required>
            </div>
            <div class="mb-3">
                <label for="Apraksts" class="form-label">Apraksts</label>
                <input type="text" class="form-control" id="Apraksts" name="Apraksts" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/videspapildu" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

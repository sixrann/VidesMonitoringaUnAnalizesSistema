<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Pievienot jaunu gaisa kvalitātes ierakstu</h2>
        <form method="POST" action="/allData/gaisakvalitate">
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
                <label for="Temperatura" class="form-label">Temperatūra</label>
                <input type="number" step="0.1" class="form-control" id="Temperatura" name="Temperatura" required>
            </div>
            <div class="mb-3">
                <label for="Mitrums" class="form-label">Mitrums</label>
                <input type="number" step="0.1" class="form-control" id="Mitrums" name="Mitrums" required>
            </div>
            <div class="mb-3">
                <label for="Putekli" class="form-label">Putekļi</label>
                <input type="number" step="0.1" class="form-control" id="Putekli" name="Putekli" required>
            </div>
            <div class="mb-3">
                <label for="Smakas" class="form-label">Smakas</label>
                <input type="number" step="0.1" class="form-control" id="Smakas" name="Smakas" required>
            </div>
            <div class="mb-3">
                <label for="Mikroorganismi" class="form-label">Mikroorganismi</label>
                <input type="number" step="0.1" class="form-control" id="Mikroorganismi" name="Mikroorganismi" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/gaisakvalitate" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

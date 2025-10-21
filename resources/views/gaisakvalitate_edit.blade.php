<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Rediģēt ierakstu</h2>
        <form method="POST" action="/allData/gaisakvalitate/{{ $gaiss->id }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="VietasID" class="form-label">Vietas Nosaukums</label>
                <select class="form-select" id="VietasID" name="VietasID" required>
                    <option value="" disabled>Izvēlieties vietas nosaukumu</option>
                    @foreach (App\Models\Vietas::all() as $vieta)
                        <option value="{{ $vieta->id }}" {{ $gaiss->VietasID == $vieta->id ? 'selected' : '' }}>{{ $vieta->Nosaukums }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Datums" class="form-label">Datums</label>
                <input type="date" class="form-control" id="Datums" name="Datums" value="{{ $gaiss->Datums }}" required>
            </div>
            <div class="mb-3">
                <label for="Laiks" class="form-label">Laiks</label>
                <input type="time"  class="form-control" id="Laiks" name="Laiks" value="{{ $gaiss->Laiks }}" required>
            </div>
            <div class="mb-3">
                <label for="Temperatura" class="form-label">Temperatūra</label>
                <input type="number" step="0.1" class="form-control" id="Temperatura" name="Temperatura" value="{{ $gaiss->Temperatura }}" required>
            </div>
            <div class="mb-3">
                <label for="Mitrums" class="form-label">Mitrums</label>
                <input type="number" step="0.1" class="form-control" id="Mitrums" name="Mitrums" value="{{ $gaiss->Mitrums }}" required>
            </div>
            <div class="mb-3">
                <label for="Putekli" class="form-label">Putekļi</label>
                <input type="number" step="0.1" class="form-control" id="Putekli" name="Putekli" value="{{ $gaiss->Putekli }}" required>
            </div>
            <div class="mb-3">
                <label for="Smakas" class="form-label">Smakas</label>
                <input type="number" step="0.1" class="form-control" id="Smakas" name="Smakas" value="{{ $gaiss->Smakas }}" required>
            </div>
            <div class="mb-3">
                <label for="Mikroorganismi" class="form-label">Mikroorganismi</label>
                <input type="number" step="0.1" class="form-control" id="Mikroorganismi" name="Mikroorganismi" value="{{ $gaiss->Mikroorganismi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/gaisakvalitate" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

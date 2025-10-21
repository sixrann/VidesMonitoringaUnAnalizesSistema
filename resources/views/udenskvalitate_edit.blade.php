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
        <form method="POST" action="/allData/udenskvalitate/{{ $udens->id }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="VietasID" class="form-label">Vietas Nosaukums</label>
                <select class="form-select" id="VietasID" name="VietasID" required>
                    <option value="" disabled>Izvēlieties vietas nosaukumu</option>
                    @foreach (App\Models\Vietas::all() as $vieta)
                        <option value="{{ $vieta->id }}" {{ $udens->VietasID == $vieta->id ? 'selected' : '' }}>{{ $vieta->Nosaukums }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Datums" class="form-label">Datums</label>
                <input type="date" class="form-control" id="Datums" name="Datums" value="{{ $udens->Datums }}" required>
            </div>
            <div class="mb-3">
                <label for="Laiks" class="form-label">Laiks</label>
                <input type="time"  class="form-control" id="Laiks" name="Laiks" value="{{ $udens->Laiks }}" required>
            </div>
            <div class="mb-3">
                <label for="Temperatura" class="form-label">Temperatūra</label>
                <input type="number" step="0.1" class="form-control" id="Temperatura" name="Temperatura" value="{{ $udens->Temperatura }}" required>
            </div>
            <div class="mb-3">
                <label for="pH" class="form-label">pH</label>
                <input type="number" step="0.1" class="form-control" id="pH" name="pH" value="{{ $udens->pH }}" required>
            </div>
            <div class="mb-3">
                <label for="Dzelzs" class="form-label">Dzelzs</label>
                <input type="number" step="0.1" class="form-control" id="Dzelzs" name="Dzelzs" value="{{ $udens->Dzelzs }}" required>
            </div>
            <div class="mb-3">
                <label for="Mangans" class="form-label">Mangāns</label>
                <input type="number" step="0.1" class="form-control" id="Mangans" name="Mangans" value="{{ $udens->Mangans }}" required>
            </div>
            <div class="mb-3">
                <label for="Fosfati" class="form-label">Fosfāti</label>
                <input type="number" step="0.1" class="form-control" id="Fosfati" name="Fosfati" value="{{ $udens->Fosfati }}" required>
            </div>
            <div class="mb-3">
                <label for="Nitrati" class="form-label">Nitrāti</label>
                <input type="number" step="0.1" class="form-control" id="Nitrati" name="Nitrati" value="{{ $udens->Nitrati }}" required>
            </div>
            <div class="mb-3">
                <label for="Nitriti" class="form-label">Nitriti</label>
                <input type="number" step="0.1" class="form-control" id="Nitriti" name="Nitriti" value="{{ $udens->Nitriti }}" required>
            </div>
            <div class="mb-3">
                <label for="Mikroorganismi" class="form-label">Mikroorganismi</label>
                <input type="number" step="0.1" class="form-control" id="Mikroorganismi" name="Mikroorganismi" value="{{ $udens->Mikroorganismi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Saglabāt</button>
            <a href="/allData/udenskvalitate" class="btn btn-secondary ms-2">Atpakaļ uz sarakstu</a>
        </form>
    </div>

    @include('inc.footer')

</body>
</html>

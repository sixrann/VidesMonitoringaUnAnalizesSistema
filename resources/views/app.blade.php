<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Majaslapa</title>
</head>
<body>

@include('inc.header')

<div class="container mt-5">
<div class="row">
    <div class="col-12 text-center mb-4">
        <h1 class="display-6">Vides monitoringa un analīzes sistēma</h1>
        <p class="lead">Reāllaika datu vākšana, vizualizācija un analīze gaisa, ūdens un trokšņa kvalitātes uzraudzībai.</p>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Par sistēmu</h5>
                <p class="card-text">
                    Sistēma apkopo datus no izkliedētiem sensoriem un analizē tos.
                </p>
                <ul>
                    <li>Gaisa kvalitātes (PM2.5, PM10, CO₂) uzraudzība</li>
                    <li>Ūdens parametrs (pH, oksigens, piesārņojums)</li>
                    <li>Trokšņa līmeņa monitorings</li>
                    <li>Brīdinājumi un automātiskas atskaites</li>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card text-bg-light">
                <div class="card-body">
                    <h6 class="card-title mb-3">Pašreizējie rādītāji</h6>
                    <div class="d-flex justify-content-between">
                        <span>Gaisa kvalitāte (AQI)</span>
                        <span class="badge bg-success">42</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Ūdens pH</span>
                        <span class="badge bg-warning">7.4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@include('inc.footer')
</body>
</html>

<html>
<head>
    <title>Kontakti</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('inc.header')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow" style="max-width: 700px; width: 100%; font-size: 1.25rem;">
            <div class="card-body">
                <h1 class="card-title text-center mb-4" style="font-weight: 700; font-size: 2.5rem;">
                    Vides Mērījumu Kontakti
                </h1>
                <p class="text-center mb-4" style="font-size: 1.2rem;">Ja jums ir jautājumi vai nepieciešama papildu informācija par vides mērījumiem, lūdzu, sazinieties ar mums:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Adrese:</strong> Brīvības iela 123, Rīga, Latvija</li>
                    <li class="list-group-item"><strong>Telefons:</strong> +371 123 45678</li>
                    <li class="list-group-item"><strong>E-pasts:</strong> info@videsmerijumi.lv</li>
                    <li class="list-group-item"><strong>Darba laiks:</strong> Pirmdiena - Piektdiena, 9:00 - 17:00</li>
                </ul>
            </div>
        </div>
    </div>
    @include('inc.footer')
</body>
</html>
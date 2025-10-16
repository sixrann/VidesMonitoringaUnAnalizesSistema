<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header class="bg-primary text-white py-3">
    <div class="container">
        <h1 class="mb-3">Vides monitoringa un analīzes sistēma</h1>
        <div class="d-flex gap-2 mb-3">
            @if(!isset($is_logged) || !$is_logged)
                <a href="/login" class="btn btn-success">Login</a>
                <a href="/register" class="btn btn-success">Reģistrēties</a>
            @endif
            @if(isset($is_logged) && $is_logged)
                <a href="/logout" class="btn btn-danger">Logout</a>
            @endif
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">App</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontakti">Contacts</a>
                        </li>
                        @if(isset($is_logged) && $is_logged && session('admin', false))
                        <li class="nav-item">
                            <a class="nav-link" href="/allData/vietas">Vietas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allData/gaisakvalitate">Gaisa Kvalitate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allData/udenskvalitate">Udens Kvalitate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allData/videspapildu">Vides Papildus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allData/specialisti">Specialisti</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
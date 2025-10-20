<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<title>Majaslapa</title>
<style>
    /* Small helper so banner is a reasonable height and crops cleanly */
    .banner-img { width: 100%; max-height: 320px; object-fit: cover; display: block; border-radius: .375rem; }
</style>
</head>
<body>

@include('inc.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-5 fw-bold">Vides monitoringa un analīzes sistēma</h1>
            <p class="text-muted">Reāllaika mērījumi un vienkārša pārskata lapa. Šī versija ir vienkāršota, lai būtu viegli saprotama un ātri ielādēta.</p>
        </div>
    </div>

    <!-- Decorative banner -->
    <div class="row mb-4">
        <div class="col-12">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1400&q=60" class="banner-img shadow-sm" alt="Vides banner">
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-3"><i class="bi bi-cloud-fill text-primary fs-2"></i></div>
                    <h5 class="card-title">Gaisa kvalitāte</h5>
                    <p class="text-muted mb-0">Mēs uzraugām gaisa sastāvu un nodrošinām pārskatāmus datus par piesārņojuma tendencēm.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-3"><i class="bi bi-droplet-fill text-info fs-2"></i></div>
                    <h5 class="card-title">Ūdens monitorings</h5>
                    <p class="text-muted mb-0">Regulāri mērījumi ūdens parametriem un brīdinājumi par novirzēm no normas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-3"><i class="bi bi-leaf-fill text-success fs-2"></i></div>
                    <h5 class="card-title">Vides papildu</h5>
                    <p class="text-muted mb-0">Papildu vides dati, novērojumi un papildpakalpojumi, kas palīdz pieņemt informētus lēmumus.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jaunumi</h5>
                    <p class="mb-2">Mēs regulāri papildinām datu bāzi ar jaunākajiem mērījumiem un uzlabojam sensoru tīklu.</p>
                    <p class="mb-0 text-muted">Aplūkojiet mūsu jaunākos atjauninājumus sadaļā 'Ziņas' vai sazinieties ar speciālistiem par konkrētām prasībām.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Speciālisti</h5>
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://i.pravatar.cc/48?img=32" alt="Dr. A. Bērziņš" class="rounded-circle me-2" width="48" height="48">
                        <div>
                            <div class="fw-bold">Gaisa kvalitāte</div>
                            <div class="text-muted small"> • gaisakvalitate@gmail.com</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://i.pravatar.cc/48?img=12" alt="Ing. L. Ozoliņš" class="rounded-circle me-2" width="48" height="48">
                        <div>
                            <div class="fw-bold">Ūdens monitorings</div>
                            <div class="text-muted small"> • udensmonitorings@gmail.com</div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Sazināties</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@include('inc.footer')
</body>
</html>

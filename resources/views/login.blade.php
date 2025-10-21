<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h1 class="mb-4 text-center">Pieslēgties</h1>
                        <form method="POST" action="/login">
                            @csrf
                            @if (session('message'))
                                <div class="alert alert-danger">
                                {{ session('message') }}
                                </div>
                            @endif
                            @if (session('create'))
                                <div class="alert alert-success">
                                {{ session('create') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">E-pasts</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Parole</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('inc.footer')

</body>
</html>
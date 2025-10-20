<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Specialistu Dati</h2>
        @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger">
            {{ session('delete') }}
            </div>
        @endif
                @if (session('edit'))
            <div class="alert alert-warning">
            {{ session('edit') }}
            </div>
        @endif
        <a href="/allData/specialisti/create" class="btn btn-success mb-3">Pievienot jaunu ierakstu</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Vārds/Uzvārds</th>
                    <th>Specializācija</th>
                    <th>Darbības</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($specialists as $el)
                    <tr>
                        <td>{{ $el->id }}</td>
                        <td>{{ $el-> Vards}} {{ $el-> Uzvards}}</td>
                        <td>{{ $el-> Specializacija}}</td>
                        <td>
                            <a href="/allData/specialisti/{{ $el->id }}/delete" class="btn btn-danger btn-sm" id="delete-{{ $el->id }}">Dzēst</a>
                            <a href="/allData/specialisti/{{ $el->id }}/view" class="btn btn-info btn-sm" id="view-{{ $el->id }}">Skatit</a>
                            <a href="/allData/specialisti/{{ $el->id }}/edit" class="btn btn-warning btn-sm" id="edit-{{ $el->id }}">Rediģēt</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('inc.footer')

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Data</title>
</head>
<body>

    @include('inc.header')

    <div class="container mt-4">
        <h2>Gaiss Dati</h2>
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
        <a href="/allData/gaisakvalitate/create" class="btn btn-success mb-3">Pievienot jaunu ierakstu</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Vietas nosaukums</th>
                    <th>Datums</th>
                    <th>Laiks</th>
                    <th>Darbības</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaiss as $el)
                    <tr>
                        <td>{{ $el->id }}</td>
                        <td>{{ $el->Vietas ? $el->Vietas->Nosaukums : '' }}</td>
                        <td>{{ $el->Datums }}</td>
                        <td>{{ $el->Laiks }}</td>
                        <td>
                            <a href="/allData/gaisakvalitate/{{ $el->id }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
                            <a href="/allData/gaisakvalitate/{{ $el->id }}/view" class="btn btn-info btn-sm">Skatit</a>
                            <a href="/allData/gaisakvalitate/{{ $el->id }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('inc.footer')

</body>
</html>

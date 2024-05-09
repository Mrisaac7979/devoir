<!-- resources/views/classement.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement des universités</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Classement par critères</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Rang</th>
                                <th scope="col">Critère</th>
                                <th scope="col">Université</th>
                                <th scope="col">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($sortedByCriteria as $criterion => $notations)
                                <tr>
                                    <td colspan="4" class="bg-light font-weight-bold">{{ ucfirst($criterion) }}</td>
                                </tr>
                                @php
                                    $sortedNotations = $notations->sortByDesc($criterion);
                                @endphp
                                @foreach ($sortedNotations as $notation)
                                    <tr>
                                        <td>{{ $counter }}</td>
                                        <td>{{ ucfirst($criterion) }}</td>
                                        <td>{{ $notation->universite->nom }}</td>
                                        <td>{{ $notation->$criterion }}</td>
                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td colspan="4"><hr></td>
                                </tr>
                                @php
                                    $counter = 1; // Réinitialiser le compteur pour le prochain groupe de critères
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Classement par score</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Université</th>
                                <th scope="col">Score total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sortedByScore as $notation)
                                <tr>
                                    <td>{{ $notation->universite->nom }}</td>
                                    <td>{{ $notation->score }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

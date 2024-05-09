<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notations</title>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Notations</h3>
                        <table class="table">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col">Utilisateur</th>
                                    <th scope="col">Université</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Commentaire</th>
                                    <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sortedByCriteria as $notation)
                                    <tr>
                                        <td>{{ $notation->user->name }}</td>
                                        <td>{{ $notation->universite->nom }}</td>
                                        <td>{{ $notation->score }}</td>
                                        <td>{{ $notation->commentaire }}</td>
                                        <td>
                                            <form action="{{ route('notations.destroy', $notation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liens vers les fichiers JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

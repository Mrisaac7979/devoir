<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une notation</title>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-warning .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center">Noter une université</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notations.store') }}" method="POST">
                            @csrf <!-- Champ CSRF -->
                            <div class="form-group">
                                <label for="universite">Université:</label>
                                <select id="universite" name="universite_id" class="form-control border-warning">
                                    @foreach($universites as $universite)
                                        <option value="{{ $universite->id }}">{{ $universite->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="qualite">Qualité Enseignement:</label><br>
                                @for ($i = 0; $i <= 5; $i++)
                                    <label class="btn btn-warning">
                                        <input type="radio" name="qualite" id="qualite{{ $i }}" value="{{ $i }}" autocomplete="off"> {{ $i }}
                                    </label>
                                @endfor
                            </div>
                            <div class="form-group">
                                <label for="infrastructures">Infrastructures:</label><br>
                                @for ($i = 0; $i <= 5; $i++)
                                    <label class="btn btn-warning">
                                        <input type="radio" name="infrastructures" id="infrastructures{{ $i }}" value="{{ $i }}" autocomplete="off"> {{ $i }}
                                    </label>
                                @endfor
                            </div>
                            <div class="form-group">
                                <label for="recherche">Recherche:</label><br>
                                @for ($i = 0; $i <= 5; $i++)
                                    <label class="btn btn-warning">
                                        <input type="radio" name="recherche" id="recherche{{ $i }}" value="{{ $i }}" autocomplete="off"> {{ $i }}
                                    </label>
                                @endfor
                            </div>
                            <div class="form-group">
                                <label for="experience">Expérience Professionnelle:</label><br>
                                @for ($i = 0; $i <= 5; $i++)
                                    <label class="btn btn-warning">
                                        <input type="radio" name="experience" id="experience{{ $i }}" value="{{ $i }}" autocomplete="off"> {{ $i }}
                                    </label>
                                @endfor
                            </div>
                            <div class="form-group">
                                <label for="commentaire">Commentaire:</label>
                                <textarea id="commentaire" name="commentaire" class="form-control border-warning" rows="3"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Noter</button>
                            </div>
                        </form>
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

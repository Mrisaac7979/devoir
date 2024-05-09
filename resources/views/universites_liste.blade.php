<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="universities-list py-8 bg-blue-500 overflow-x-auto">
    <div class="container mx-auto row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Afficher les universités -->
        @foreach ($universites as $universite)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/'. $universite->logo) }}" alt="Logo de {{ $universite->nom }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $universite->nom }}</h5>
                        <p class="card-text">{{ $universite->description }}</p>
                        <p class="card-text"><small class="text-muted">Localisation: {{ $universite->localisation }}</small></p>
                        <p class="card-text"><small class="text-muted">Programmes: {{ $universite->programmes }}</small></p>
                        <p class="card-text"><small class="text-muted">Contact: {{ $universite->contact }}</small></p>
                        <a href="{{ $universite->site_web }}" target="_blank" class="btn btn-primary">Visiter le site</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

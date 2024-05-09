<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des universités</title>
    <!-- Liens vers les fichiers CSS Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .details-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .details-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
        }

        /* Style des boutons cliquables */
        .btn {
            cursor: pointer;
            transition: background-color 0.3s ease;
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            font-weight: bold; /* Mise en gras */
        }

        .btn:hover {
            background-color: rgba(59, 130, 246, 0.8);
        }

        .table-cell {
            max-width: 200px; /* Largeur maximale pour chaque cellule */
            overflow: hidden; /* Masquer le texte dépassant */
            text-overflow: ellipsis; /* Afficher des points de suspension pour le texte dépassant */
            white-space: nowrap; /* Empêcher le texte de passer à la ligne */
        }

        .description-full {
            white-space: normal; /* Permettre au texte de dépasser la largeur maximale */
            overflow: auto; /* Activer la barre de défilement si nécessaire */
            max-height: 5em; /* Limiter la hauteur à 5 lignes */
        }

        .see-more {
            cursor: pointer;
            color: blue;
        }

        .see-more:hover {
            text-decoration: underline;
        }

        /* Centrer le contenu */
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Aligner vers le haut */
            height: 100vh; /* Pleine hauteur de la vue */
            padding-top: 20px; /* Espacement supplémentaire en haut */
        }

        /* Style de la fenêtre modale pour afficher le logo en grand */
        .logo-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1001; /* Au-dessus de la fenêtre modale de détails */
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 90%;
            max-height: 90%;
            overflow: auto;
        }

        .logo-modal img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-blue-500">
    <div class="container mx-auto">
        <div class="w-full lg:w-11/12 xl:w-10/12 lg:mx-auto xl:mx-auto">
            <h1 class="text-center text-white text-4xl font-bold mb-8">Liste des universités</h1>
            <table class="w-full bg-white shadow-lg rounded-lg">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-2 py-2">Logo</th>
                        <th class="px-2 py-2">Nom</th>
                        <th class="px-2 py-2">Localisation</th>
                        <th class="px-2 py-2">Description</th>
                        <th class="px-2 py-2">Contact</th>
                        <th class="px-2 py-2">Programmes</th>
                        <th class="px-2 py-2">Site Web</th>
                        <th class="px-2 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($universites as $universite)
                        <tr class="hover:bg-blue-100">
                            <td class="border px-2 py-2 flex items-center">
                                <!-- Entourer le logo avec un div cliquable -->
                                <div onclick="showLogo('{{ asset('storage/'. $universite->logo) }}')" class="cursor-pointer">
                                    <img src="{{ asset('storage/'. $universite->logo) }}" alt="Logo de {{ $universite->nom }}" class="h-12 ml-2">
                                </div>
                            </td>
                            <td class="border px-2 py-2">{{ $universite->nom }}</td>
                            <td class="border px-2 py-2">{{ $universite->localisation }}</td>
                            <td class="border px-2 py-2 table-cell">
                                <div class="description">{{ $universite->description }}</div>
                            </td>
                            <td class="border px-2 py-2">{{ $universite->contact }}</td>
                            <td class="border px-2 py-2">{{ $universite->programmes }}</td>
                            <td class="border px-2 py-2">
                                <a href="{{ $universite->site_web }}" class="text-blue-500" target="_blank">{{ $universite->site_web }}</a>
                            </td>
                            <td class="border px-2 py-2">
                                <div class="flex justify-center space-x-4">
                                    <a href="{{ route('universites.edit', $universite->id) }}" class="btn btn-primary btn-sm">Éditer</a>
                                    <form action="{{ route('universites.delete', $universite->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                    </form>
                                    <button onclick="showDetailsModal('{{ $universite->id }}')" class="btn btn-primary btn-sm">Détails</button>
                                </div>
                            </td>
                        </tr>
                        <!-- Détails du modal -->
                        <div id="details-modal-{{ $universite->id }}" class="details-modal">
                            <div class="details-content">
                                <h2 class="text-2xl font-bold mb-4">{{ $universite->nom }}</h2>
                                <p><strong>Localisation:</strong> {{ $universite->localisation }}</p>
                                <p><strong>Description:</strong> {{ $universite->description }}</p>
                                <p><strong>Contact:</strong> {{ $universite->contact }}</p>
                                <p><strong>Programmes:</strong> {{ $universite->programmes }}</p>
                                <!-- Ajoutez d'autres détails ici -->
                                <button class="mt-4 btn btn-primary" onclick="closeDetailsModal('{{ $universite->id }}')">Fermer</button>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Fenêtre modale pour afficher le logo en grand -->
    <div id="logo-modal" class="logo-modal">
        <span onclick="closeLogo()" class="absolute top-0 right-0 cursor-pointer text-3xl">&times;</span>
        <img id="logo-img" src="" alt="Logo en grand">
    </div>

    <script>
        // Afficher le logo en grand
        function showLogo(src) {
            document.getElementById('logo-img').src = src;
            document.getElementById('logo-modal').style.display = 'block';
        }

        // Fermer la fenêtre modale du logo en grand
        function closeLogo() {
            document.getElementById('logo-modal').style.display = 'none';
        }

        // Affiche les détails du modal
        function showDetailsModal(id) {
            document.getElementById('details-modal-' + id).style.display = 'flex';
        }

        // Ferme le modal
        function closeDetailsModal(id) {
            document.getElementById('details-modal-' + id).style.display = 'none';
        }
    </script>
</body>
</html>

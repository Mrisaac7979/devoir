<!-- resources/views/utilisateurs/edit.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
    <!-- Liens vers les fichiers CSS Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-500">
    <div class="container mx-auto mt-5">
        <div class="w-full md:w-2/3 lg:w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-center text-4xl font-bold text-blue-500 mb-4">Modifier un utilisateur</h1>
            <form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700 font-bold mb-2">Nom :</label>
                    <input type="text" id="nom" name="nom" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700" value="{{ $utilisateur->nom }}">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email :</label>
                    <input type="email" id="email" name="email" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700" value="{{ $utilisateur->email }}">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

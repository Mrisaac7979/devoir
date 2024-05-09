<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une université</title>
    <!-- Liens vers les fichiers CSS Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-500">
    <div class="container mx-auto mt-5">
        <div class="w-full md:w-2/3 lg:w-1/2 mx-auto">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-center text-4xl font-bold text-blue-500 mb-4">Créer une université</h1>
                <form action="{{ route('universites.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom :</label>
                        <input type="text" id="nom" name="nom" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="mb-4">
                        <label for="localisation" class="block text-gray-700 font-bold mb-2">Localisation :</label>
                        <input type="text" id="localisation" name="localisation" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description :</label>
                        <textarea id="description" name="description" class="form-textarea border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="contact" class="block text-gray-700 font-bold mb-2">Contact :</label>
                        <input type="text" id="contact" name="contact" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="mb-4">
                        <label for="programmes" class="block text-gray-700 font-bold mb-2">Programmes :</label>
                        <input type="text" id="programmes" name="programmes" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="mb-4">
                        <label for="site_web" class="block text-gray-700 font-bold mb-2">Site Web :</label>
                        <input type="url" id="site_web" name="site_web" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="mb-4">
                        <label for="logo" class="block text-gray-700 font-bold mb-2">Logo :</label>
                        <input type="file" id="logo" name="logo" accept="image/*" class="form-input border-2 border-blue-500 w-full py-2 px-3 rounded-lg focus:outline-none focus:border-blue-700">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université Nota</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <!-- Tailwind CSS for additional styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        /* Ajout de styles personnalisés */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header h1 {
            font-size: 2.5rem;
            color: #333;
        }
        .subheader {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }
        .cta-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #45a049;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="container">
        <div class="header text-center mb-5">
            <h1 class="display-3 fw-bold">Bienvenue à Nota University Rating</h1>
            <p class="subheader">Votre plateforme pour la meilleure université</p>
        </div>
        
        <div class="content">
            <p class="text-justify">"Explorez la première plateforme de notation des universités du Togo. Obtenez des informations transparentes et pertinentes sur les établissements d'enseignement supérieur du pays, y compris les classements basés sur la qualité de l'enseignement, les infrastructures, la recherche et l'insertion professionnelle. Trouvez la meilleure université pour vous sur Nota University Rating."</p>
        </div>

        <div class="cta text-center">
            <a href="{{ route('register') }}" class="cta-button btn btn-success">S'authentifier</a>
        </div>

        <div class="footer mt-5">
            <p>&copy; 2024 Nota University Rating. Tous droits réservés.</p>
        </div>
    </div>

    <!-- Bootstrap JS for button styling -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

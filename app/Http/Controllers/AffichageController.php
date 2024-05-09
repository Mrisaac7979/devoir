<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notation; // Assurez-vous d'importer le modèle Notation

class AffichageController extends Controller
{
    public function index()
    {
        $notations = Notation::all(); // Récupère toutes les notations

        return view('affichage', compact('notations')); // Passe les notations à la vue
    }
}

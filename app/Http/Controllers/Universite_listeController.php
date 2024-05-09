<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Universite_listeController extends Controller
{
    // Méthode pour afficher la liste des universités
    public function afficherListe()
    {
        // Récupérer les universités depuis la base de données
        $universites = Universite::all();

        // Retourner la vue avec les données des universités
        return view('universites_liste', ['universites' => $universites]);
    }
}

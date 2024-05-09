<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notation;

class ClassementController extends Controller
{
    public function index()
    {
        // Récupérer toutes les notations depuis la base de données
        $notations = Notation::all();

        // Tri des notations par critères (exemple : qualité, infrastructures, recherche, expérience)
        $sortedByCriteria = [
            'qualite' => $notations->sortByDesc('qualite'),
            'infrastructures' => $notations->sortByDesc('infrastructures'),
            'recherche' => $notations->sortByDesc('recherche'),
            'experience' => $notations->sortByDesc('experience')
        ];

        // Tri des notations par score
        $sortedByScore = $notations->sortByDesc('score');

        // Passer les données à la vue et afficher la vue
        return view('classement', compact('sortedByCriteria', 'sortedByScore'));
    }
}

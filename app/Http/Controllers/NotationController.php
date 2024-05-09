<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notation;
use App\Models\Universite;
use App\Models\User;


class NotationController extends Controller
{
    public function create()
    {
        $users = User::all();
        $universites = Universite::all();
        return view('notations.create', compact('users', 'universites'));
    }

    public function index()
    {
        // Récupérer toutes les notations depuis la base de données
        $notations = Notation::all();
        
        // Calculer le score total pour chaque notation
        $notations->each(function ($notation) {
            $notation->total_score = $notation->qualite + $notation->infrastructures + $notation->recherche + $notation->experience;
        });
        
        // Trier les notations en fonction de leur score total
        $sortedByCriteria = $notations->sortByDesc('total_score');
        
        // Passer les notations triées à la vue et afficher la vue
        return view('notations.index', compact('sortedByCriteria'));
    }
    

     public function destroy(Notation $notation)
    {
        // Assurez-vous que l'utilisateur authentifié a les permissions nécessaires pour supprimer la notation, si besoin.

        // Supprimer la notation
        $notation->delete();

        // Rediriger avec un message de succès ou toute autre logique de redirection appropriée
        return redirect()->route('notations.index')->with('success', 'Notation supprimée avec succès.');
    }



public function store(Request $request)
{
    // Calcul du score
    $score = $request->qualite + $request->infrastructures + $request->recherche + $request->experience;

    // Création d'une nouvelle notation
    $notation = new Notation();
    
    // Récupération de l'ID de l'utilisateur actuellement connecté
    $userId = auth()->id();

    // Attribution des valeurs aux champs de la notation
    $notation->user_id = $userId;
    $notation->universite_id = $request->universite_id;
    $notation->score = $score;
    $notation->commentaire = $request->commentaire;

    // Sauvegarde de la nouvelle notation
    $notation->save();

    // Redirection vers la page d'affichage
    return redirect()->route('affichage')->with('success', 'Notation ajoutée avec succès!');
}

}

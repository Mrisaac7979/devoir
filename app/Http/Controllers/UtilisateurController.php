<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = User::all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function edit(User $utilisateur)
    {
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    public function update(Request $request, User $utilisateur)
    {
        

        // Mettre à jour les données de l'utilisateur
        $utilisateur->update([
            'name' => $request->nom,
            'email' => $request->email,
        ]);

        $utilisateur->save();

        // Rediriger vers la page de détails de l'utilisateur mis à jour
        return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur mis à jour avec succès !');
    }

            public function destroy(User $utilisateur)
        {
            // Supprimer l'utilisateur
            $utilisateur->delete();

            // Rediriger vers la liste des utilisateurs avec un message de succès
            return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur supprimé avec succès !');
        }

}

<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UniversiteController extends Controller
{
    public function index()
    {
        $universites = Universite::all();
        return view('universites.liste', compact('universites'));
    }

    public function create()
    {
        return view('universites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'localisation' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'programmes' => 'required',
            'site_web' => 'nullable|url', // Validation du site web
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation du logo
        ]);

        $universite = new Universite();
        $universite->nom = $request->nom;
        $universite->localisation = $request->localisation;
        $universite->description = $request->description;
        $universite->contact = $request->contact;
        $universite->programmes = $request->programmes;
        $universite->site_web = $request->site_web; // Enregistrement du site web

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->storePublicly('logos','public');
            $universite->logo = $logo;
        }

        $universite->save();

        return redirect()->route('universites.liste')->with('success', 'Université ajoutée avec succès!');
    }

    public function edit($id)
    {
        $universite = Universite::findOrFail($id);
        return view('universites.edit', compact('universite'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'localisation' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'programmes' => 'required',
            'site_web' => 'nullable|url', // Validation du site web
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation du logo
        ]);

        $universite = Universite::findOrFail($id);
        $universite->nom = $request->nom;
        $universite->localisation = $request->localisation;
        $universite->description = $request->description;
        $universite->contact = $request->contact;
        $universite->programmes = $request->programmes;
        $universite->site_web = $request->site_web; // Mise à jour du site web

        if ($request->hasFile('logo')) {
            // Supprimer le fichier logo précédent si nécessaire
            Storage::delete('public/logos/' . $universite->logo);

            $logo = $request->file('logo');
            $fileName = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('public/logos', $fileName);
            $universite->logo = $fileName;
        }

        $universite->save();

        return redirect()->route('universites.liste')->with('success', 'Université mise à jour avec succès!');
    }

    public function delete($id)
    {
        $universite = Universite::findOrFail($id);
        // Supprimer le fichier logo associé
        Storage::delete('public/logos/' . $universite->logo);
        $universite->delete();
        return redirect()->route('universites.liste')->with('success', 'Université supprimée avec succès!');
    }

     // Méthode pour afficher la liste des universités
     public function afficherListe()
     {
         // Récupérer toutes les universités depuis la base de données
         $universites = Universite::all();
     
         // Retourner la vue avec toutes les universités
         return view('universites_liste', ['universites' => $universites]);
     }
     

}

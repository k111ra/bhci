<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;
use App\Models\Promoteur;
use App\Models\TypeBien;

class BienController extends Controller
{
    public function index()
    {
        $biens = Bien::all();
        $promoteurs = Promoteur::all();
        $typeBiens = TypeBien::all();
        return view('admin.biens.addBien', compact('biens', 'promoteurs', 'typeBiens'));
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'promoteur_id' => 'required',
            'type_bien_id' => 'required',
            'nom' => 'required',
            'localisation' => '',
            'prix' => '',
            'surfaces' => '',
            'nbr_piece' => '',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation des images
        ], [
            'images.*.image' => 'Le fichier doit être une image.',
            'images.*.mimes' => 'Le fichier doit être de type : jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'Le fichier ne doit pas dépasser 2048 kilo-octets.',
        ]);

        // Création d'une nouvelle instance de Bien avec les données du formulaire
        $bien = Bien::create($request->except('images'));

        // Gestion des images
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');
                $imagePaths[] = $imageName;
            }

            // Ajout des chemins des images à la base de données
            $bien->update(['images' => $imagePaths]);
        }

        // Redirection vers la page souhaitée après avoir ajouté le bien
        return redirect()->route('biens.index')->with('message', 'Bien ajouté avec succès!');
    }


    public function show()
    {
        $biens = Bien::all();
        return view('index')->with('biens', $biens);
    }

    public function showDetails($id)
    {
        $details = Bien::findOrFail($id);
        return view('detail_bien')->with('details', $details);
    }



}

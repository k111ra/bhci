<?php

namespace App\Http\Controllers;

use App\Models\Promoteur;
use App\Models\TypeBien;
use Illuminate\Http\Request;

class TypeBienController extends Controller
{
    public function index()
    {
        $promoteurs = Promoteur::all();
        $typeBiens = TypeBien::all();
        return view('admin.typeBiens.addTypeBien')->with(
            [
                'promoteurs' => $promoteurs,
                'typeBiens' => $typeBiens
            ]
        );
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            // 'description' => '',
        ]);

        // Créez un nouveau type de bien
        $typeBien = new TypeBien();
        $typeBien->nom = $request->input('nom');
        // $typeBien->description = $request->input('description');
        // Ajoutez d'autres champs selon votre modèle TypeBien

        // Enregistrez le type de bien dans la base de données
        $typeBien->save();

        // Redirigez avec un message de succès
        return redirect()->route('type-biens.index')->with('message', 'Le type de bien a été ajouté avec succès.');
    }

}

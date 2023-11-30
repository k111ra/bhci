<?php

namespace App\Http\Controllers;

use App\Models\Promoteur;
use Illuminate\Http\Request;

class PromoteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promoteurs = Promoteur::all();
        return view('admin.promoteurs.addPromoteur')->with('promoteurs', $promoteurs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $promoteurs = Promoteur::all()->get;
        return view('admin.promoteurs.addPromoteur')->with('promoteurs', $promoteurs);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'contact' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assurez-vous d'ajuster les types d'images selon vos besoins
            'email' => 'nullable|email',
        ]);

        // Traitement du logo
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/promoteurs'), $imageName);
            $validatedData['logo'] = $imageName;
        }

        // Création du promoteur
        Promoteur::create($validatedData);

        // Redirection avec un message de succès (vous pouvez personnaliser cela)
        return redirect()->route('promoteurs.index')->with('success', 'Promoteur ajouté avec succès!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Promoteur $promoteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promoteur $promoteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promoteur $promoteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promoteur $promoteur)
    {
        //
    }
}

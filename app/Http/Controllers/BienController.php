<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;
use App\Models\Promoteur;
use App\Models\TypeBien;

class BienController extends Controller
{
    private $promoteurs;
    private $typeBiens;

    public function __construct()
    {
        $this->promoteurs = Promoteur::all();
        $this->typeBiens = TypeBien::all();
    }

    public function index()
    {
        $biens = Bien::all();
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
            'prix' => 'numeric',
            'surfaces' => 'numeric',
            'nbr_piece' => 'numeric',
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
    $typeBiens = TypeBien::all();
    $biens = Bien::all();
    $promoteurs = Promoteur::all();
    return view('index', compact('biens', 'typeBiens', 'promoteurs'));
}


    public function showDetails($id)
    {
        $typeBiens = TypeBien::all();
        $promoteurs = Promoteur::all();
        $details = Bien::findOrFail($id);
        return view('detail_bien')->with([
            'details' => $details,
            'typeBiens' => $typeBiens,
            'promoteurs' => $promoteurs
        ]);
    }

    public function filtrer(Request $request)
    {
        $promoteurs = Promoteur::all();
        $typeBiens = TypeBien::all();
        $types = $request->input('types');
        $localisation = $request->input('localisation');
        $prixMin = $request->input('prixMin');
        $prixMax = $request->input('prixMax');
        $superficieMin = $request->input('superficieMin');
        $superficieMax = $request->input('superficieMax');
        $promoteur = $request->input('promoteur');
        $nbrePieceMin = $request->input('nbrePieceMin');
        $nbrePieceMax = $request->input('nbrePieceMax');

        // Construction de la requête en fonction des critères
        $query = Bien::query();

        if ($types && is_array($types)) {
            $query->whereIn('type_bien_id', $types);
        }

        if ($localisation) {
            $query->where('localisation', 'like', "%$localisation%");
        }

        if ($prixMin && $prixMax) {
            $query->whereBetween('prix', [$prixMin, $prixMax]);
        }

        if ($superficieMin && $superficieMax) {
            $query->whereBetween('surfaces', [$superficieMin, $superficieMax]);
        }

        if ($promoteur) {
            $query->where('promoteur_id', $promoteur);
        }

        if ($nbrePieceMin && $nbrePieceMax) {
            $query->whereBetween('nbr_piece', [$nbrePieceMin, $nbrePieceMax]);
        }

        // Exécution de la requête
        $biens = $query->get();

        // Retournez la vue avec les biens filtrés
        return view('index', compact('biens','typeBiens','promoteurs'));
    }



}

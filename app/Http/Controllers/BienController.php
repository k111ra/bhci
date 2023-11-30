<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;

class BienController extends Controller
{
    public function index()
    {
        $biens = Bien::all();
        return view('biens.index', compact('biens'));
    }

    public function show($id)
    {
        $bien = Bien::findOrFail($id);
        return view('biens.show', compact('bien'));
    }
}

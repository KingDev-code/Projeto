<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;

class EstiloController extends Controller
{
    public function index()
    {
        $estilos = Estilo::all();
        return view('dashboard', compact('estilos'));
    }

    public function create()
    {
        return view('combinacoes.estilo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'estilo' => 'required|string|max:255',
        ]);

        $estilo = new Estilo;
        $estilo->estilo = $request->input('estilo');
        
        $estilo->save();
        
        return redirect('/')->with('success', 'Estilo adicionado com sucesso!');
    }
}
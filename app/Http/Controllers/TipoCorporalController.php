<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCorporal;

class TipoCorporalController extends Controller
{
    public function index()
    {
        $tipos = TipoCorporal::where('ativo', true)->get();
        return view('departamentos', compact('tipos'));
    }

    public function create()
    {
        return view('combinacoes.tipocorporal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipocorporal' => 'required|string|max:80',
            'icone' => 'required|string',
        ]);

        TipoCorporal::create([
            'tipocorporal' => $request->input('tipocorporal'),
            'icone' => $request->input('icone'),
        ]);

        return redirect('dashboard')->with('success', 'Tipo Corporal adicionado com sucesso!');
    }
}
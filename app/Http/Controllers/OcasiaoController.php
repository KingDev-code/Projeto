<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocasiao;

class OcasiaoController extends Controller
{
    public function index()
    {
        $ocasioes = Ocasiao::all();
        return view('dashboard', compact('ocasioes'));
    }

    public function create()
    {
        return view('combinacoes.ocasiao');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ocasiao' => 'required|string|max:255',
        ]);

        $ocasiao = new Ocasiao;
        $ocasiao->ocasiao = $request->input('ocasiao');
        
        $ocasiao->save();
        
        return redirect('/')->with('success', 'Ocasião adicionada com sucesso!');
    }
}

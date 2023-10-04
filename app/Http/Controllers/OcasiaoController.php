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

    public function executivos()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'EXECUTIVOS')->first();
        return view('ocasioes.executivos', compact('ocasiao'));
    }

    public function esportivos()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'ESPORTIVOS')->first();
        return view('ocasioes.esportivos', compact('ocasiao'));
    }

    public function comemoracoes()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'COMEMORAÇÕES')->first();
        return view('ocasioes.comemoracoes', compact('ocasiao')); // Crie uma view chamada "executivos.blade.php" em resources/views/ocasioes
    }

    public function diaadia()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'DIA A DIA')->first();
        return view('ocasioes.diaadia', compact('ocasiao')); // Crie uma view chamada "esportivos.blade.php" em resources/views/ocasioes
    }

    public function modapraia()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'MODA PRAIA')->first();
        return view('ocasioes.modapraia', compact('ocasiao')); // Crie uma view chamada "executivos.blade.php" em resources/views/ocasioes
    }
}

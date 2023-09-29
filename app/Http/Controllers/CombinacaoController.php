<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combinacao; // Certifique-se de que está usando o namespace correto para o modelo
use App\Models\Peca;
use Illuminate\Support\Str;

class CombinacaoController extends Controller
{
    public function index()
    {
        $combinacoes = Combinacao::all();
        return view('dashboard', compact('combinacoes'));
    }

    public function create()
    {
        return view('combinacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cod_estilo' => 'required',
            'cod_tipocorporal' => 'required',
            'cod_ocasiao' => 'required',
            'img_comb' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link_comb' => 'required',
            'oca_esp' => 'required',
        ]);

        $combinacao = new Combinacao;

        $combinacao->cod_estilo = $request->cod_estilo;
        $combinacao->cod_tipocorporal = $request->cod_tipocorporal;
        $combinacao->cod_ocasiao = $request->cod_ocasiao;
        $combinacao->link_comb = $request->link_comb;
        $combinacao->oca_esp = $request->oca_esp;

        if ($request->hasFile('img_comb')) {
            $imagem = $request->file('img_comb');
            $nomeImagem = Str::uuid() . '.' . $imagem->getClientOriginalExtension();
            $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public');
            $combinacao->img_comb = $caminho;
        }

        $combinacao->save();

        return redirect('/combinacoes')->with('success', 'Combinação adicionada com sucesso!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combinacao; // Certifique-se de que está usando o namespace correto para o modelo
use App\Models\Ocasiao;
use Illuminate\Support\Str;

class CombinacaoController extends Controller
{
    public function index()
    {
        $combinacoes = Combinacao::all();
        $ocasioes = Ocasiao::all(); // Ou qualquer outra lógica para buscar as ocasiões
        return view('dashboard', compact('ocasioes', 'combinacoes'));
    }

    public function create()
    {
        $ocasioes = Ocasiao::all();
        return view('combinacoes.combinacoes', compact('ocasioes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cod_estilo' => 'required',
            'cod_tipocorporal' => 'required',
            'ocasiao_id' => 'required', // Agora estamos usando "ocasiao_id" em vez de "cod_ocasiao"
            'img_comb' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link_comb' => 'required',
            'oca_esp' => 'required',
        ]);

        $combinacao = new Combinacao;

        $combinacao->cod_estilo = $request->input('cod_estilo');
        $combinacao->cod_tipocorporal = $request->input('cod_tipocorporal');
        $combinacao->ocasiao_id = $request->input('ocasiao_id'); // Agora estamos usando "ocasiao_id"
        $combinacao->link_comb = $request->input('link_comb');
        $combinacao->oca_esp = $request->input('oca_esp');

        if ($request->hasFile('img_comb')) {
            $imagem = $request->file('img_comb');
            $nomeImagem = Str::uuid() . '.' . $imagem->getClientOriginalExtension();
            $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public');
            $combinacao->img_comb = $caminho;
        }

        $combinacao->save();

        return redirect('/')->with('success', 'Combinação adicionada com sucesso!');
    }
}
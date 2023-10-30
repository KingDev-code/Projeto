<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combinacao; // Certifique-se de que está usando o namespace correto para o modelo
use App\Models\Ocasiao;
use App\Models\Estilo;
use App\Models\TipoCorporal;
use Illuminate\Support\Str;

class CombinacaoController extends Controller
{
    public function index()
    {
        $estilos = Estilo::all();
        $tiposcorporal = TipoCorporal::all();
        $combinacoes = Combinacao::all();
        $ocasioes = Ocasiao::all(); // Ou qualquer outra lógica para buscar as ocasiões
        return view('envios', compact('ocasioes', 'combinacoes', 'tiposcorporal', 'estilos'));
    }

    public function create()
    {
        $estilos = Estilo::all();
        $ocasioes = Ocasiao::all();
        $tiposcorporal = TipoCorporal::all();
        return view('combinacoes.combinacoes', compact('ocasioes', 'tiposcorporal', 'estilos'));
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

        $combinacao->cod_estilo = $request->input('cod_estilo');
        $combinacao->cod_tipocorporal = $request->input('cod_tipocorporal');
        $combinacao->cod_ocasiao = $request->input('cod_ocasiao');
        $combinacao->link_comb = $request->input('link_comb');
        $combinacao->oca_esp = $request->input('oca_esp');

        if ($request->hasFile('img_comb')) {
            $imagem = $request->file('img_comb');
            $nomeImagem = Str::uuid() . '.' . $imagem->getClientOriginalExtension();
            $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public');
            $combinacao->img_comb = $caminho;
        }

        $combinacao->save();

        return redirect('dashboard')->with('success', 'Combinação adicionada com sucesso!');
    }
}
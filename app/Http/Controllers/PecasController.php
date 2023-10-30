<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;
use App\Models\Combinacao;
use Illuminate\Support\Str;

class PecasController extends Controller
{
    public function index()
    {
        $combinacoes = Combinacao::all();
        $pecas = Peca::all(); // Ou qualquer outra lógica para buscar as peças
        return view('envios', compact('pecas', 'combinacoes'));
    }

    public function create()
    {
        $combinacoes = Combinacao::all();
        return view('envios', compact('combinacoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cod_comb' => 'required', // Certifique-se de que o campo esteja presente no seu formulário
            'desc_peca' => 'required|string|max:255',
            'preco_peca' => 'required|string',
            'img_peca' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link_peca' => 'required|string|max:255',
        ]);

        $peca = new Peca;
        $peca->cod_comb = $request->input('cod_comb'); // Associa a peça a uma combinação
        $peca->desc_peca = $request->input('desc_peca');
        $peca->preco_peca = $request->input('preco_peca');

        if ($request->hasFile('img_peca')) {
            $imagem = $request->file('img_peca');
            $nomeImagem = $imagem->getClientOriginalName(); // Use o nome original do arquivo
            $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public');
            $peca->img_peca = $caminho;
        }

        $peca->link_peca = $request->input('link_peca');

        $peca->save();
        
        return redirect('dashboard')->with('success', 'Combinação adicionada com sucesso!');
    }
}
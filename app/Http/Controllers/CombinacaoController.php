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
        // Lógica para exibir o formulário de criação de Combinações
        return view('combinacoes.create'); // Substitua 'combinacoes.create' pelo nome da sua view.
    }

    public function store(Request $request)
    {
        // Lógica para processar o formulário de criação de Combinações
        $combinacao = new Combinacao;
        // Preencha os campos do modelo com os dados do formulário
        $combinacao->codigo_combinacao = $request->input('codigo_combinacao');
        $combinacao->codigo_estilo = $request->input('codigo_estilo');
        $combinacao->codigo_tipo_corporal = $request->input('codigo_tipo_corporal');
        // ...
        $combinacao->save();
        // Redirecione para a página apropriada após a criação
        return redirect()->route('combinacoes.create');
    }

    public function inativar(Request $request)
    {
        // Lógica para inativar Combinações
        $selected_combinacoes = $request->input('selected_combinacoes');
        // Realize a lógica para inativar as Combinações selecionadas
        // Redirecione para a página apropriada após a inativação
        return redirect()->route('combinacoes.create');
    }

    public function edit($id)
    {
        // Lógica para exibir o formulário de edição de Combinações
        $combinacao = Combinacao::find($id);
        // Passe os dados da Combinação para a view de edição
        return view('combinacoes.edit', compact('combinacao'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para processar o formulário de edição de Combinações
        $combinacao = Combinacao::find($id);
        // Atualize os campos da Combinação com os dados do formulário
        $combinacao->codigo_combinacao = $request->input('codigo_combinacao');
        $combinacao->codigo_estilo = $request->input('codigo_estilo');
        $combinacao->codigo_tipo_corporal = $request->input('codigo_tipo_corporal');
        // ...
        $combinacao->save();
        // Redirecione para a página apropriada após a edição
        return redirect()->route('combinacoes.create');
    }

}
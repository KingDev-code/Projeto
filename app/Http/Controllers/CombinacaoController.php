<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Combinacao;
class CombinacaoController extends Controller
{
    public function index() {

        $combinacao = Combinacao::all();

        return view('dashboard', ['combinacao' => $combinacao]);
    }

    public function create() {

        return view('combinacoes.combinacoes');
    }

    
public function store(Request $request)
{
    $combinacao = new Combinacao;

    $combinacao->nome = $request->nome;
    $combinacao->link = $request->link;
    $combinacao->oca_esp = $request->oca_esp;

    // Verifica se foi enviada uma imagem
    if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        
        // Gere um nome único para a imagem usando o método Str::uuid()
        $nomeImagem = Str::uuid() . '.' . $imagem->getClientOriginalExtension();
        
        $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public'); // Salva a imagem com nome único
        $combinacao->img = $caminho; // Armazena o caminho da imagem no modelo
    }

    $combinacao->save();

    return redirect('/');
}

}

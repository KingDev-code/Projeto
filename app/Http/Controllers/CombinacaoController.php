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

    public function store(request $request) {

        $combinacao = new Combinacao;

        $combinacao->nome = $request->nome;
        $combinacao->img = $request->img;
        $combinacao->link = $request->link;
        $combinacao->oca_esp = $request->oca_esp;

        $combinacao->save();

        return redirect('/');
    }
}

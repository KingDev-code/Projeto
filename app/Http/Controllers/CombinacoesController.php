<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinacoesController extends Controller
{
    public function index() {

        $combinacoes = Combinacao::all();

        return view('combinacoes.combinacoes', ['combinacoes' => $combinacoes]);
    }

    public function create() {

        return view('combinacoes.combinacoes');
    }

    public function store(request $request) {

        $combinacoes = new Combinacao;

        $combinacoes->nome = $request->nome;
        $combinacoes->img = $request->img;
        $combinacoes->link = $request->link;
        $combinacoes->ocasiao_esp = $request->ocasiao_esp;
    }
}

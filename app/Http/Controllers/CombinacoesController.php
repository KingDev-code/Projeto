<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Combinacoe;

class CombinacoesController extends Controller
{
    public function index() {

        $combinacao = Combinacoe::all();

        return view('dashboard', ['combinacao' => $combinacao]);
    }

    public function create() {

        return view('combinacoes.combinacoes');
    }

    public function store(request $request) {

        $combinacao = new Combinacoe;

        $combinacao->nome = $request->nome;
        $combinacao->img = $request->img;
        $combinacao->link = $request->link;
        $combinacao->ocasiao_esp = $request->ocasiao_esp;

        $combinacao->save();

        return redirect('/');
    }
}

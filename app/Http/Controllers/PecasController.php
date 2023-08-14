<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peca;

class PecasController extends Controller
{
    public function index() {

        $peca = Peca::all();

        return view('combinacoes.peca', ['peca' => $peca]);
    }

    public function create() {

        return view('combinacoes.peca');
    }

    public function store(request $request) {

        $peca = new Peca;

        $peca->nome = $request->nome;
        $peca->img = $request->img;
        $peca->link = $request->link;
        $peca->ocasiao_esp = $request->ocasiao_esp;
    }
}

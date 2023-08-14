<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peca;

class PecasController extends Controller
{
    public function index() {

        $peca = Peca::all();

        return view('dashboard', ['peca' => $peca]);
    }

    public function create() {

        return view('combinacoes.peca');
    }

    public function store(request $request) {

        $peca = new Peca;

        $peca->nome = $request->nome;
        $peca->valor = $request->valor;

        $peca->save();

        return redirect('/');
    }
}

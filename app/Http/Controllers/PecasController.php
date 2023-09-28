<?php

use Illuminate\Http\Request;
use App\Models\Peca;

class PecasController extends Controller
{
    public function index()
    {
        $pecas = Peca::all();
        return view('dashboard', compact('pecas'));
    }

    public function create()
    {
        $combinacoes = Combinacao::all();
        return view('pecas.create', compact('combinacoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc_peca' => 'required|string|max:255', // Use 'desc_peca' em vez de 'nome' se for o nome correto em sua migração
            'preco_peca' => 'required|numeric', // Use 'preco_peca' em vez de 'valor' se for o nome correto em sua migração
        ]);

        $peca = new Peca;

        $peca->desc_peca = $request->input('desc_peca');
        $peca->preco_peca = $request->input('preco_peca');

        $peca->save();

        return redirect('/');
    }
}
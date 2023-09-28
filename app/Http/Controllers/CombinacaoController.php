<?php

use Illuminate\Http\Request;
use App\Models\Combinacao; // Certifique-se de que está usando o namespace correto para o modelo
use Illuminate\Support\Str;

class CombinacaoController extends Controller
{
    public function index()
    {
        $combinacoes = Combinacao::all();
        return view('dashboard', compact('combinacoes'));
    }

    public function create()
    {
        return view('combinacoes.combinacoes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cod_estilo' => 'required|integer',
            'cod_tipocorporal' => 'required|integer',
            'cod_ocasiao' => 'required|integer',
            'img_comb' => 'required|string|max:255',
            'link_comb' => 'required|string|max:255',
            'oca_esp' => 'required|string|max:255',
        ]);

        $combinacao = new Combinacao;

        $combinacao->cod_estilo = $request->input('cod_estilo');
        $combinacao->cod_tipocorporal = $request->input('cod_tipocorporal');
        $combinacao->cod_ocasiao = $request->input('cod_ocasiao');
        $combinacao->img_comb = $request->input('img_comb');
        $combinacao->link_comb = $request->input('link_comb');
        $combinacao->oca_esp = $request->input('oca_esp');

        // Verifica se foi enviada uma imagem
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');

            // Gere um nome único para a imagem usando o método Str::uuid()
            $nomeImagem = Str::uuid() . '.' . $imagem->getClientOriginalExtension();

            $caminho = $imagem->storeAs('imagem', $nomeImagem, 'public'); // Salva a imagem com nome único
            $combinacao->img_comb = $caminho; // Armazena o caminho da imagem no modelo
        }

        $combinacao->save();

        return redirect('/');
    }
}
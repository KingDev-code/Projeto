<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocasiao;

class OcasiaoController extends Controller
{
    public function index()
    {
        $ocasioes = Ocasiao::where('ativo', true)->get(); // Obtenha apenas as ocasiões ativas
        return view('departamentos', compact('ocasioes'));
    }

    public function create()
    {
        return view('combinacoes.ocasiao');
    }

    public function store(Request $request)
    {
        // Valide os dados de entrada
        $request->validate([
            'ocasiao' => 'required|max:80',
        ]);
    
        // Crie uma nova instância da model Ocasiao e preencha os campos
        $ocasiao = new Ocasiao();
        $ocasiao->ocasiao = $request->input('ocasiao');
        $ocasiao->save();
    
        // Redirecione de volta com uma mensagem de sucesso ou realize qualquer ação apropriada
        return redirect()->route('departamentos')->with('success', 'Ocasião cadastrada com sucesso.');
    }

    public function inativar(Request $request)
    {
        $ocasioesIds = $request->input('selected_ocasioes');

        // Validação: verifique se os IDs de ocasiões são válidos
        $ocasioes = Ocasiao::whereIn('id', $ocasioesIds)->get();
        
        if ($ocasioes->isEmpty()) {
            return redirect()->back()->with('error', 'Selecione pelo menos uma ocasião válida para inativar.');
        }

        // Agora você pode realizar a lógica de inativação para cada ocasião selecionada
        foreach ($ocasioes as $ocasiao) {
            // Atualize o estado da ocasião, por exemplo, definindo 'ativo' para 0
            $ocasiao->update(['ativo' => 0]);
        }

        return redirect()->back()->with('success', 'Ocasiões inativadas com sucesso.');
    }

    public function executivos()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'EXECUTIVOS')->first();
        return view('ocasioes.executivos', compact('ocasiao'));
    }

    public function esportivos()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'ESPORTIVOS')->first();
        return view('ocasioes.esportivos', compact('ocasiao'));
    }

    public function comemoracoes()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'COMEMORAÇÕES')->first();
        return view('ocasioes.comemoracoes', compact('ocasiao')); // Crie uma view chamada "executivos.blade.php" em resources/views/ocasioes
    }

    public function diaadia()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'DIA A DIA')->first();
        return view('ocasioes.diaadia', compact('ocasiao')); // Crie uma view chamada "esportivos.blade.php" em resources/views/ocasioes
    }

    public function modapraia()
    {
        $ocasiao = Ocasiao::where('ocasiao', 'MODA PRAIA')->first();
        return view('ocasioes.modapraia', compact('ocasiao')); // Crie uma view chamada "executivos.blade.php" em resources/views/ocasioes
    }
}

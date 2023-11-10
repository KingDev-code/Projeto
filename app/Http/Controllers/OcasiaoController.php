<?php

namespace App\Http\Controllers;

use App\Models\Combinacao;
use Illuminate\Http\Request;
use App\Models\Ocasiao;

class OcasiaoController extends Controller
{
    public function index()
    {
        $ocasioes = Ocasiao::where('ativo', true)->get();
        return view('departamentos', compact('ocasioes'));
    }

    public function create()
    {
        return view('combinacoes.ocasiao');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ocasiao' => 'required|max:80',
        ]);

        Ocasiao::create([
            'ocasiao' => $request->input('ocasiao'),
            'ativo' => true, // Certifique-se de configurar o campo "ativo" apropriadamente
        ]);

        return redirect()->route('departamentos')->with('success', 'Ocasião cadastrada com sucesso.');
    }

    public function inativar(Request $request)
    {
        $action = $request->input('action');
        $selectedOcasioes = $request->input('selected_ocasioes', []);

        if ($action === 'inativar') {
            Ocasiao::whereIn('id', $selectedOcasioes)->update(['ativo' => false]);
            return redirect()->back()->with('success', 'Ocasioes inativadas com sucesso!');
        } elseif ($action === 'editar') {
            // Verifique se alguma ocasião foi selecionada
            if (count($selectedOcasioes) > 0) {
                return redirect()->route('editar.ocasioes', ['id' => $selectedOcasioes[0]]);
            } else {
                return redirect()->back()->with('error', 'Nenhuma ocasião selecionada. Selecione pelo menos uma ocasião para editar.');
            }
        } elseif ($action === 'novo') {
            return redirect()->route('ocasioes.create');
        }

        return redirect()->back()->with('error', 'Ação inválida.');
    }

    public function edit($id)
    {
        $ocasiao = Ocasiao::find($id);

        if (!$ocasiao) {
            return redirect()->route('departamentos')->with('error', 'Ocasião não encontrada.');
        }

        return view('combinacoes.ocasiao-edit', compact('ocasiao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ocasiao' => 'required|string|max:255',
        ]);

        $ocasiao = Ocasiao::find($id);

        if (!$ocasiao) {
            return redirect()->route('departamentos')->with('error', 'Ocasião não encontrada.');
        }

        $ocasiao->ocasiao = $request->input('ocasiao');
        $ocasiao->save();

        return redirect()->route('departamentos')->with('success', 'Ocasião atualizada com sucesso.');
    }


    public function executivos()
    {
        // Carregue as combinações apenas com o nome "Executivas"
        $executivos = Combinacao::whereHas('ocasiao', function ($query) {
            $query->where('ocasiao', 'Executivas');
        })->with(['estilo', 'pecas'])->get();

        return view('ocasioes.executivos', compact('executivos'));
    }

    public function esportivos()
    {
        // Carregue as combinações apenas com o nome "comemoracoes"
        $esportivos = Combinacao::whereHas('ocasiao', function ($query) {
            $query->where('ocasiao.ocasiao', 'Esportivas');
        })->get();

        return view('ocasioes.esportivos', compact('esportivos'));
    }

    public function comemoracoes()
    {
        // Carregue as combinações apenas com o nome "comemoracoes"
        $combinacoes = Combinacao::whereHas('ocasiao', function ($query) {
            $query->where('ocasiao.ocasiao', 'Comemorações');
        })->get();
    
        return view('ocasioes.comemoracoes', compact('combinacoes'));
    }

    public function diaadia()
    {
        // Carregue as combinações apenas com o nome "comemoracoes"
        $diaadias = Combinacao::whereHas('ocasiao', function ($query) {
            $query->where('ocasiao.ocasiao', 'Dia a dia');
        })->get();

        return view('ocasioes.diaadia', compact('diaadias')); // Crie uma view chamada "esportivos.blade.php" em resources/views/ocasioes
    }

    public function modapraia()
    {
         // Carregue as combinações apenas com o nome "comemoracoes"
         $modapraias = Combinacao::whereHas('ocasiao', function ($query) {
            $query->where('ocasiao.ocasiao', 'Moda Praia');
        })->get();

        return view('ocasioes.modapraia', compact('modapraias')); // Crie uma view chamada "executivos.blade.php" em resources/views/ocasioes
    }
}

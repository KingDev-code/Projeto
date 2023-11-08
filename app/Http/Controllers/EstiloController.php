<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;

class EstiloController extends Controller
{
    public function index()
    {
        $estilos = Estilo::where('ativo', true)->get();
        return view('admin.partials.estilos', compact('estilos'));
    }

    public function create()
    {
        return view('combinacoes.estilo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'estilo' => 'required|max:80',
        ]);

        Estilo::create([
            'estilo' => $request->input('estilo'),
            'ativo' => true, // Certifique-se de configurar o campo "ativo" apropriadamente
        ]);

        return redirect()->route('estilos')->with('success', 'Ocasião cadastrada com sucesso.');
    }

    public function inativar(Request $request)
    {
        $action = $request->input('action');
        $selectedEstilos = $request->input('selected_estilos', []);
    
        if ($action === 'inativar') {
            Estilo::whereIn('id', $selectedEstilos)->update(['ativo' => false]);
            return redirect()->back()->with('success', 'Estilos inativados com sucesso!');
        } elseif ($action === 'editar') {
            // Verifique se algum estilo foi selecionado
            if (count($selectedEstilos) > 0) {
                // Redirecione para a página de edição dos estilos com base nos IDs
                return redirect()->route('editar.estilos', ['id' => $selectedEstilos[0]]);
            } else {
                return redirect()->back()->with('error', 'Nenhum estilo selecionado. Selecione pelo menos um estilo para editar.');
            }
        } elseif ($action === 'novo') {
            // Lógica para ação "Novo"
            return redirect()->route('estilos.create');
        }
    
        return redirect()->back()->with('error', 'Ação inválida.');
    }
    
    public function edit($id)
    {
        $estilo = Estilo::find($id);

        if (!$estilo) {
            return redirect()->route('estilos')->with('error', 'Estilo não encontrado.');
        }

        return view('combinacoes.estilos-edit', compact('estilo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estilo' => 'required|string|max:80',
        ]);

        $estilo = Estilo::find($id);

        if (!$estilo) {
            return redirect()->route('estilos')->with('error', 'Estilo não encontrado.');
        }

        $estilo->estilo = $request->input('estilo');
        $estilo->save();

        return redirect()->route('estilos')->with('success', 'Estilo atualizado com sucesso.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCorporal;

class TipoCorporalController extends Controller
{
    public function index()
    {
        $tipos = TipoCorporal::where('ativo', true)->get();
        return view('departamentos', compact('tipos'));
    }

    public function create()
    {
        return view('combinacoes.tipocorporal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipocorporal' => 'required|string|max:80',
            'icone' => 'required|string',
        ]);

        TipoCorporal::create([
            'tipocorporal' => $request->input('tipocorporal'),
            'icone' => $request->input('icone'),
        ]);

        return redirect('tipos')->with('success', 'Tipo Corporal adicionado com sucesso!');
    }

    public function inativar(Request $request)
    {
        $action = $request->input('action');
        $selectedTipos = $request->input('selected_tipos', []);

        if ($action === 'inativar') {
            TipoCorporal::whereIn('id', $selectedTipos)->update(['ativo' => false]);
            return redirect()->back()->with('success', 'Tipos corporais inativados com sucesso!');
        } elseif ($action === 'editar') {
            // Verifique se algum tipo corporal foi selecionado
            if (count($selectedTipos) > 0) {
                // Redirecione para a página de edição dos tipos corporais com base nos IDs
                return redirect()->route('editar.tipos', ['id' => $selectedTipos[0]]);
            } else {
                return redirect()->back()->with('error', 'Nenhum tipo corporal selecionado. Selecione pelo menos um tipo corporal para editar.');
            }
        } elseif ($action === 'novo') {
            // Lógica para ação "Novo"
            return redirect()->route('tipos.create');
        }

        return redirect()->back()->with('error', 'Ação inválida.');
    }

    public function edit($id)
    {
        $tipoCorporal = TipoCorporal::find($id);

        if (!$tipoCorporal) {
            return redirect()->route('tipos')->with('error', 'Tipo corporal não encontrado.');
        }

        return view('combinacoes.tipocorporal-edit', compact('tipoCorporal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipocorporal' => 'required|string|max:255',
            'icone' => 'required|string', // Certifique-se de ajustar os campos e validações conforme necessário
        ]);

        $tipoCorporal = TipoCorporal::find($id);

        if (!$tipoCorporal) {
            return redirect()->route('tipos')->with('error', 'Tipo corporal não encontrado.');
        }

        $tipoCorporal->tipocorporal = $request->input('tipocorporal');
        $tipoCorporal->icone = $request->input('icone');
        $tipoCorporal->save();

        return redirect()->route('tipos')->with('success', 'Tipo corporal atualizado com sucesso.');
    }
}
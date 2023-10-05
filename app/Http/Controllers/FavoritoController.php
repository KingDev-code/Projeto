<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combinacao;

class FavoritoController extends Controller
{
    /public function favoritar(Combinacao $combinacao)
    {
        $user = Auth::user(); // Obtém o usuário autenticado

        // Verifica se o usuário já favoritou esta combinação
        if (!$user->favoritos->contains($combinacao->id)) {
            $user->favoritos()->attach($combinacao); // Adiciona a combinação aos favoritos do usuário
            return redirect()->back()->with('success', 'Combinação adicionada aos favoritos.');
        }

        return redirect()->back()->with('error', 'Esta combinação já está nos seus favoritos.');
    }

    public function desfavoritar(Combinacao $combinacao)
    {
        $user = Auth::user(); // Obtém o usuário autenticado

        // Verifica se o usuário favoritou esta combinação
        if ($user->favoritos->contains($combinacao->id)) {
            $user->favoritos()->detach($combinacao); // Remove a combinação dos favoritos do usuário
            return redirect()->back()->with('success', 'Combinação removida dos favoritos.');
        }

        return redirect()->back()->with('error', 'Esta combinação não está nos seus favoritos.');
    }
}

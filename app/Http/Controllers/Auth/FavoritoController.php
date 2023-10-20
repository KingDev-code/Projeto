<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Combinacao;
use App\Models\Favorito;
use App\Models\Empresa; // Importa o modelo Empresa
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class FavoritoController extends Controller
{
    public function show(Combinacao $combinacao)
    {
        $combinacao = Combinacao::all();
        return view('welcome', compact('combinacao'));
    }

    public function adicionar(Combinacao $combinacao)
    {
        $user = Auth::user();

        // Verifica se o usuário já favoritou esta combinação
        if (!$user->favoritos->contains('combinacao_id', $combinacao->id)) {
            $favorito = new Favorito();
            $favorito->user_id = $user->id;
            $favorito->combinacao_id = $combinacao->id;
            $favorito->save();
            return redirect()->back()->with('success', 'Combinação adicionada aos favoritos.');
        }

        return redirect()->back()->with('error', 'Esta combinação já está nos seus favoritos.');
    }

    public function remover(Combinacao $combinacao)
    {
        $user = Auth::user();

        // Encontre e exclua o registro de favorito
        $favorito = Favorito::where('user_id', $user->id)
            ->where('combinacao_id', $combinacao->id)
            ->first();

        if ($favorito) {
            $favorito->delete();
            return redirect()->back()->with('success', 'Combinação removida dos favoritos.');
        }

        return redirect()->back()->with('error', 'Esta combinação não está nos seus favoritos.');
    }
}

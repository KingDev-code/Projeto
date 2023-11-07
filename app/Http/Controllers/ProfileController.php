<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user = Auth::user(); // Obtenha o usuário autenticado
    
        if ($user) {
            $userData = User::find($user->id); // Obtenha os dados do usuário com base no ID do usuário
    
            if ($userData) {
                return view('profile.edit', compact('user', 'userData'));
            }
        }
    
        // Lidar com o caso em que os dados não foram encontrados
        return redirect('/');
    }
    
    

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Atualize os campos do usuário da tabela 'users'
        $user->fill([
            'name' => $request->input('name'),
            'sobrenome' => $request->input('sobrenome'),
            'datanasc' => $request->input('datanasc'), // Alterado para 'datanasc'
            // Adicione outros campos do usuário aqui, se necessário
        ]);

        // Verifique se o email foi alterado
        if ($request->input('email') !== $user->login->email) {
            $user->login->email_verified_at = null;
            $user->login->email = $request->input('email');
        }

        // Verifique se a senha também foi alterada
        if ($request->input('password')) {
            $user->login->password = Hash::make($request->input('password'));
        }

        $user->push(); // Salve todas as alterações

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

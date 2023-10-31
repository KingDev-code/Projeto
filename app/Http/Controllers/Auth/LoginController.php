<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Empresa;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Verifica se o usuário existe na tabela 'users'
        $user = User::where('email', $credentials['email'])->first();

        // Se o usuário não for encontrado na tabela 'users', verifica na tabela 'empresas'
        if (!$user) {
            $user = Empresa::where('email', $credentials['email'])->first();
        }

         // Isso vai imprimir as credenciais para depuração
         

        if ($user) {
            if (Auth::guard('web')->attempt($credentials)) { // Guard 'web' para usuários
                // Redirecionar para a área de usuário
                return redirect('/profile');
            } elseif (Auth::guard('empresa')->attempt($credentials)) { // Guard 'empresa' para empresas
                // Redirecionar para a área de empresa
                return redirect('/empresa/dashboard');
            } else {
                return back()->withErrors(['login' => 'E-mail ou senha incorretos']);
            }
        }

        return back()->withErrors(['login' => 'E-mail ou senha incorretos']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redireciona para a página inicial após o logout
    }

}

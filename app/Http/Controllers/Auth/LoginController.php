<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Login;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validação dos campos de entrada
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);
    
        $credentials = $request->only('email', 'senha');
    
        // Verificar se o usuário existe com base no e-mail
        $user = Login::where('email', $credentials['email'])->first();
    
        if ($user) {
            // Se o usuário existe, verificar a senha
            if (Hash::check($credentials['senha'], $user->senha)) {
                // Autenticação bem-sucedida
                if ($user->type === 'cliente') {
                    Auth::guard('login')->login($user);
                    return redirect('/profile');
                } elseif ($user->type === 'empresa') {
                    Auth::guard('login')->login($user);
                    return redirect('/edashboard');
                }
            }
        }
    
        // Se a autenticação falhar, retorne com uma mensagem de erro
        return back()->withErrors(['login' => 'E-mail ou senha incorretos']);
    }
    

    
    


    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redireciona para a página inicial após o logout
    }

}

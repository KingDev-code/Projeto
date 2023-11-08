<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Login;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        $user = Login::where('email', $credentials['email'])->first();
        
        if ($user) {
            if ($user->type === 'cliente' && Auth::guard('login')->attempt($credentials)) {
                return redirect('/profile');
            } elseif ($user->type === 'empresa' && Auth::guard('login')->attempt($credentials)) {
                return redirect('/empresa/dashboard');
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

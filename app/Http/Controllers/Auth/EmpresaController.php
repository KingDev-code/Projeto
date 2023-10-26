<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class EmpresaController extends Controller
{
    public function create()
    {
        return view('empresa.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'resp' => 'required|string|max:255',
            'cnpj' => 'required|string|max:18|unique:empresas',
            'telefone' => 'required|string|max:20',
            'data_fundacao' => 'required|date',
            'email' => 'required|string|email|max:255|unique:empresas',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $empresa = Empresa::create([
            'nome' => $request->nome,
            'resp' => $request->resp,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'data_fundacao' => $request->data_fundacao,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($empresa);

        return redirect('/empresa/dashboard');
    }

    public function login()
    {
        return view('auth.login-empresa');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('empresa.dashboard');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }
}
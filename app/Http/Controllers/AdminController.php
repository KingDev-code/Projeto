<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function registerForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'email' => 'required|string|email|unique:logins',
            'password' => 'required|string|min:8',
            'nome_admin' => 'required|string|max:50',
            'sobrenome_admin' => 'required|string|max:80',
            'cpf_admin' => 'required|string|max:20|unique:administradores',
            'telefone' => 'required|string|max:15',
            'dtanasc_admin' => 'required|date',
            'dtaadmissao_admin' => 'required|date',
        ]);

        // Crie o registro de login
        $login = new Login();
        $login->email = $request->input('email');
        $login->password = Hash::make($request->input('password'));
        $login->type = 'admin';
        $login->save();

        // Crie o registro de administrador associado ao login
        $admin = new Admin();
        $admin->login_id = $login->id;
        $admin->img_admin = $request->input('img_admin');
        $admin->nome_admin = $request->input('nome_admin');
        $admin->sobrenome_admin = $request->input('sobrenome_admin');
        $admin->cpf_admin = $request->input('cpf_admin');
        $admin->telefone = $request->input('telefone');
        $admin->dtanasc_admin = $request->input('dtanasc_admin');
        $admin->dtaadmissao_admin = $request->input('dtaadmissao_admin');
        $admin->save();

        return redirect()->route('admin.home'); // Redirecione para a página de dashboard do administrador ou outra ação apropriada
    }

    public function home()
    {
        return view('admin.home');
    }
}
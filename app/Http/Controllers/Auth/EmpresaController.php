<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Empresa; // Importa o modelo Empresa
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class EmpresaController extends Controller
{
    // Método para exibir o formulário de registro para empresas
    public function create(): View
    {
        return view('auth.register-empresa'); // Renderiza a view para registro de empresa
    }

    // Método para processar o registro da empresa
    public function store(Request $request): RedirectResponse
    {
        // Validação dos dados recebidos no formulário
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'resp' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string', 'max:18', 'unique:' . Empresa::class],
            'telefone' => ['required', 'string', 'max:20'],
            'data_fundacao' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Empresa::class],
            'senha' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Cria uma nova instância da empresa e a salva no banco de dados
        $empresa = Empresa::create([
            'nome' => $request->nome,
            'resp' => $request->resp,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'data_fundacao' => $request->data_fundacao,
            'email' => $request->email,
            'password' => Hash::make($request->senha), // Aplica hash à senha para segurança
        ]);

        // Dispara o evento de registro (útil para atividades adicionais, como envio de emails)
        event(new Registered($empresa));

        // Autentica a empresa recém-registrada
        Auth::login($empresa);

        // Redireciona para a página inicial (ou outro destino desejado)
        return redirect(RouteServiceProvider::HOME);
    }
}
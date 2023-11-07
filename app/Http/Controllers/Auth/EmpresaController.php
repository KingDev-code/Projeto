<?php

namespace App\Http\Controllers\Auth;

use App\Models\Login;
use App\Models\Empresa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\EmpresaUpdateRequest; // Supondo que você tem um arquivo EmpresaUpdateRequest


class EmpresaController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/empresa';

    public function __construct()
    {
        $this->middleware('guest'); // auth:empresa
    }

    public function create()
    {
        return view('empresa.register');
    }

    /**
     * Handle the registration request for empresas.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'resp' => 'required|string|max:255',
            'cnpj' => 'required|string|max:18|unique:empresas',
            'telefone' => 'required|string|max:20',
            'data_fundacao' => 'required|date',
            'email' => 'required|string|email|max:255|unique:logins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('empresa.register')
                ->withErrors($validator)
                ->withInput();
        }

        // Crie o registro de Login
        $login = new Login();
        $login->email = $request->input('email');
        $login->password = Hash::make($request->input('password'));
        $login->type = 'empresa';
        $login->save();

        // Crie o registro da Empresa associada ao Login
        $empresa = new Empresa();
        $empresa->login_id = $login->id;
        $empresa->nome = $request->input('nome');
        $empresa->resp = $request->input('resp');
        $empresa->cnpj = $request->input('cnpj');
        $empresa->telefone = $request->input('telefone');
        $empresa->data_fundacao = $request->input('data_fundacao');
        $empresa->save();

        // Autentique a empresa após o registro
        Auth::guard('empresa')->login($login); // Autentique a empresa através do login

        // Redirecione para a página de perfil da empresa ou outra página apropriada
        return redirect()->route('empresa.dashboard'); // Exemplo: dashboard da empresa
    }

    public function edit(Request $request): View|RedirectResponse
    {
        // Verifique se o usuário está autenticado como empresa
        if (!Auth::guard('empresa')->check()) {
            return redirect()->route('empresa.login'); // Redirecione para a página de login da empresa se não estiver autenticado.
        }
    
        $empresa = Auth::guard('empresa')->user();
        $empresaData = Empresa::where('login_id', $empresa->id)->first();
    
        if ($empresaData) {
            return view('empresa.dashboard', compact('empresa', 'empresaData'));
        }
    
        // Lidar com o caso em que os dados não foram encontrados
        return redirect()->route('index'); // Redirecione para a página de dashboard da empresa ou ação apropriada
    }
    /**
     * Atualizar as informações do perfil da empresa.
     */
    public function update(EmpresaUpdateRequest $request): RedirectResponse
    {
        $empresa = $request->user();

        // Valida e tenta atualizar os campos da empresa
        try {
            $empresa->update($request->validated());
        } catch (\Exception $e) {
            // Se ocorrer um erro, registre-o ou trate-o de acordo com suas necessidades.
            // Por exemplo, você pode usar o Log para registrar o erro.
            Log::error($e);
            return Redirect::back()->with('error', 'Ocorreu um erro durante a atualização.');
        }

        // Verifique se o e-mail foi alterado, redefina a verificação de e-mail
        if ($empresa->isDirty('email')) {
            $empresa->email_verified_at = null;
        }

        $empresa->save();

        return Redirect::route('empresa.dashboard')->with('status', 'empresa-updated');
    }


    /**
     * Deletar a conta da empresa.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('empresaDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $empresa = $request->user();

        Auth::logout();

        $empresa->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
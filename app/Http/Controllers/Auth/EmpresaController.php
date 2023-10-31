<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaUpdateRequest; // Supondo que você tem um arquivo EmpresaUpdateRequest
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class EmpresaController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function login(Request $request): View
    {
        return view('empresa.dashboard', [
            'empresa' => $request->user(), // Supondo que você tem um modelo Empresa
        ]);
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('empresa.register');
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $empresa = $this->registrarEmpresa($request->all());

        // Autenticar a empresa após o registro
        $this->guard()->login($empresa);

        return redirect($this->redirectTo);
        
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'resp' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string', 'max:18', 'unique:empresas'],
            'telefone' => ['required', 'string', 'max:20'],
            'data_fundacao' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:empresas'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function registrarEmpresa(array $data)
    {
        return Empresa::create([
            'nome' => $data['nome'],
            'resp' => $data['resp'],
            'cnpj' => $data['cnpj'],
            'telefone' => $data['telefone'],
            'data_fundacao' => $data['data_fundacao'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function edit(Request $request): View
    {
        return view('empresa-dashboard', [
            'empresa' => $request->user(), // Supondo que você tem um modelo Empresa
        ]);
    }

    /**
     * Atualizar as informações do perfil da empresa.
     */
    public function update(EmpresaUpdateRequest $request): RedirectResponse
    {
        $empresa = $request->user();

        $empresa->fill($request->validated());

        if ($empresa->isDirty('email')) {
            $empresa->email_verified_at = null;
        }

        $empresa->save();

        return Redirect::route('empresa-dashboard')->with('status', 'empresa-updated');
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
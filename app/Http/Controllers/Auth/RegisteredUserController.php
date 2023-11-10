<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Login;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sobrenome' => ['required', 'string', 'max:255'],
            'datanasc' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:login'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Crie um novo registro na tabela 'logins'
        $login = new Login();
        $login->email = $request->email;
        $login->senha = Hash::make($request->password);
        $login->type = 'cliente'; // Defina o tipo como 'cliente'
        $login->save(); // Salve o login no banco de dados

        // Crie um novo registro na tabela 'users' com 'login_id' associado
        $user = new User();
        $user->login_id = $login->id; // Associe o ID do login ao campo 'login_id' na tabela 'users'
        $user->name = $request->name;
        $user->sobrenome = $request->sobrenome;
        $user->datanasc = $request->datanasc;
        $user->save(); // Salve o usuário no banco de dados

        event(new Registered($user));

        Auth::login($user);

        return redirect('/profile');
    }

}

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombinacoesController;
use App\Http\Controllers\PecasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas web para sua aplicação. 
| Estas rotas são carregadas pelo RouteServiceProvider e todas elas 
| serão atribuídas ao grupo de middleware "web". Crie algo incrível!
|
*/

// Rota para a página inicial ("/"). Retorna a view 'welcome'.
Route::get('/', function () {
    return view('welcome');
});

// Rota para a página "/select". Retorna a view 'select'.
Route::get('/select', function () {
    return view('select');
});

// Rota para criar uma nova combinação. Chama o método 'create' do controller 'CombinacoesController'.
Route::get('combinacoes', [CombinacoesController::class, 'create']);

// Rota para armazenar uma nova combinação. Chama o método 'store' do controller 'CombinacoesController'.
Route::post('combinacoes', [CombinacoesController::class, 'store']);

// Rota para a página "/combinacoes". Retorna a view 'combinacoes'. É aplicado o middleware de autenticação ('auth') e verificação de email ('verified').
Route::get('/combinacoes', function () {
    return view('combinacoes.combinacoes');
})->middleware(['auth', 'verified'])->name('combinacoes');

// Rota para criar uma nova peça. Chama o método 'create' do controller 'PecasController'.
Route::get('peca', [PecasController::class, 'create']);

// Rota para armazenar uma nova peça. Chama o método 'store' do controller 'PecasController'.
Route::post('peca', [PecasController::class, 'store']);

// Rota para a página "/peca". Retorna a view 'peca'. É aplicado o middleware de autenticação ('auth') e verificação de email ('verified').
Route::get('/peca', function () {
    return view('combinacoes.peca');
})->middleware(['auth', 'verified'])->name('peca');

// Rota para a página "/dashboard". Retorna a view 'dashboard'. É aplicado o middleware de autenticação ('auth') e verificação de email ('verified').
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rotas protegidas pelo middleware de autenticação ('auth').
Route::middleware('auth')->group(function () {
    // Rota para editar o perfil do usuário. Chama o método 'edit' do controller 'ProfileController'.
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Rota para atualizar o perfil do usuário. Chama o método 'update' do controller 'ProfileController'.
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Rota para excluir o perfil do usuário. Chama o método 'destroy' do controller 'ProfileController'.
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclui rotas de autenticação a partir do arquivo 'auth.php'.
require __DIR__.'/auth.php';

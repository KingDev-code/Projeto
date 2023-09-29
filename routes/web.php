<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombinacaoController;
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


Route::get('dashboard', [CombinacaoController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


/*Combinações
Route::get('combinacoes', [CombinacaoController::class, 'create']);
Route::post('combinacoes', [CombinacaoController::class, 'store']);
Route::get('/combinacoes', function () {
    return view('combinacoes.combinacoes');
})->middleware(['auth', 'verified'])->name('combinacoes');
*/

// Rotas para Combinações
Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');
Route::get('/combinacoes/create', [CombinacaoController::class, 'create'])->name('combinacoes.create');
Route::post('/combinacoes', [CombinacaoController::class, 'store'])->name('combinacoes.store');
Route::get('/combinacoes/{combinacao}', [CombinacaoController::class, 'show'])->name('combinacoes.show');
Route::get('/combinacoes/{combinacao}/edit', [CombinacaoController::class, 'edit'])->name('combinacoes.edit');
Route::put('/combinacoes/{combinacao}', [CombinacaoController::class, 'update'])->name('combinacoes.update');
Route::delete('/combinacoes/{combinacao}', [CombinacaoController::class, 'destroy'])->name('combinacoes.destroy');

// Rotas para Peças
Route::get('/pecas', [PecaController::class, 'index'])->name('pecas.index');
Route::get('/pecas/create', [PecaController::class, 'create'])->name('pecas.create');
Route::post('/pecas', [PecaController::class, 'store'])->name('pecas.store');
Route::get('/pecas/{peca}', [PecaController::class, 'show'])->name('pecas.show');
Route::get('/pecas/{peca}/edit', [PecaController::class, 'edit'])->name('pecas.edit');
Route::put('/pecas/{peca}', [PecaController::class, 'update'])->name('pecas.update');
Route::delete('/pecas/{peca}', [PecaController::class, 'destroy'])->name('pecas.destroy');
/*Peças
Route::get('peca', [PecasController::class, 'create']);
Route::post('peca', [PecasController::class, 'store']);
Route::get('/peca', function () {
    return view('combinacoes.peca');
})->middleware(['auth', 'verified'])->name('peca');


// Rota para a página "/dashboard". Retorna a view 'dashboard'. É aplicado o middleware de autenticação ('auth') e verificação de email ('verified').
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


// Grupo de rotas protegidas pelo middleware de autenticação ('auth').
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Inclui rotas de autenticação a partir do arquivo 'auth.php'.
require __DIR__.'/auth.php';

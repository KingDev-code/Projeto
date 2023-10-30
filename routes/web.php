<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombinacaoController;
use App\Http\Controllers\OcasiaoController;
use App\Http\Controllers\TipoCorporalController;
use App\Http\Controllers\PecasController;
use App\Http\Controllers\EstiloController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\FavoritoController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Auth\EmpresaController;

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

Route::post('/upload-image', ['ImageController@upload'])->name('upload.image');


// Rota de exibição do formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rota de processamento do formulário de login
Route::post('/login', [LoginController::class, 'Login']);

// Rota de logout
Route::post('/logout', [LoginController::class, 'Logout'])->name('logout');



// Rota para exibir o formulário de registro da empresa
Route::get('/empresa/register', [EmpresaController::class, 'create'])->name('empresa.register');

// Rota para processar o registro da empresa
Route::post('/empresa/register', [EmpresaController::class, 'store']);

// Rota para o painel da empresa
Route::get('/empresa/dashboard', [EmpresaController::class, 'login'])->name('empresa-dashboard');



// Rota para a página inicial ("/"). Retorna a view 'welcome'.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/envios', function () {
    return view('envios');
})->name('envios');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/favoritos', function () {
    return view('favoritos');
})->name('favoritos');

Route::get('/comemoracoes', function () {
    return view('ocasioes.comemoracoes');
})->name('comemoracoes');

Route::get('/diaadia', function () {
    return view('ocasioes.diaadia');
})->name('diaadia');

Route::get('/esportivos', function () {
    return view('ocasioes.esportivos');
})->name('esportivos');

Route::get('/executivos', function () {
    return view('ocasioes.executivos');
})->name('executivos');

Route::get('/modapraia', function () {
    return view('ocasioes.modapraia');
})->name('modapraia');




Route::get('/dadospessoais', function () {
    return view('dadospessoais');
})->name('dadospessoais');

Route::get('/empresa', function () {
    return view('empresa');
});


// Rota para a página "/select". Retorna a view 'select'.
Route::get('/select', function () {
    return view('select');
});


// Rota para favoritar uma combinação
Route::post('/favorito/adicionar/{combinacao}', 'FavoritoController@adicionar')->name('favorito.adicionar');

// Rota para desfavoritar uma combinação
Route::delete('/favorito/remover/{combinacao}', 'FavoritoController@remover')->name('favorito.remover');


// Route::get('dashboard', [PecasController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('dashboard', [CombinacaoController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

/*Combinações
Route::get('combinacoes', [CombinacaoController::class, 'create']);
Route::post('combinacoes', [CombinacaoController::class, 'store']);
Route::get('/combinacoes', function () {
    return view('combinacoes.combinacoes');
})->middleware(['auth', 'verified'])->name('combinacoes');
*/

// Rotar para Favoritos 
Route::post('/favoritar/{combinacao}', [FavoritoController::class, 'favoritar'])->name('combinacoes.favoritar');
Route::post('/desfavoritar/{combinacao}', [FavoritoController::class, 'desfavoritar'])->name('combinacoes.desfavoritar');

// Rotas para Estilos 
Route::get('/estilos', [EstiloController::class, 'index'])->name('estilos.index');
Route::get('/estilos/create', [EstiloController::class, 'create'])->name('estilos.create');
Route::post('/estilos', [EstiloController::class, 'store'])->name('estilos.store');

// Rotas para Ocasião
Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');
Route::get('/ocasioes/create', [OcasiaoController::class, 'create'])->name('ocasioes.create');
Route::post('/ocasioes', [OcasiaoController::class, 'store'])->name('ocasioes.store');
Route::get('/ocasiao/executivos', [OcasiaoController::class, 'executivos'])->name('executivos');
Route::get('/ocasiao/esportivos', [OcasiaoController::class, 'esportivos'])->name('esportivos');
Route::get('/ocasiao/comemoracoes', [OcasiaoController::class, 'comemoracoes'])->name('comemoracoes');
Route::get('/ocasiao/diaadia', [OcasiaoController::class, 'diaadia'])->name('diaadia');
Route::get('/ocasiao/modapraia', [OcasiaoController::class, 'modapraia'])->name('modapraia');

// Rotas para Tipos Corporal
Route::get('/tiposcorporal/create', [TipoCorporalController::class, 'create'])->name('tiposcorporal.create');
Route::post('/tiposcorporal', [TipoCorporalController::class, 'store'])->name('tiposcorporal.store');

// Rotas para Combinações
Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');
Route::get('/combinacoes/create', [CombinacaoController::class, 'create'])->name('combinacoes.create');
Route::post('/combinacoes', [CombinacaoController::class, 'store'])->name('combinacoes.store');
Route::get('/combinacoes/{combinacao}', [CombinacaoController::class, 'show'])->name('combinacoes.show');
Route::get('/combinacoes/{combinacao}/edit', [CombinacaoController::class, 'edit'])->name('combinacoes.edit');
Route::put('/combinacoes/{combinacao}', [CombinacaoController::class, 'update'])->name('combinacoes.update');
Route::delete('/combinacoes/{combinacao}', [CombinacaoController::class, 'destroy'])->name('combinacoes.destroy');

// Rotas para Peças
Route::get('/pecas', [PecasController::class, 'index'])->name('pecas.index');
Route::get('/pecas/create', [PecasController::class, 'create'])->name('pecas.create');
Route::post('/pecas', [PecasController::class, 'store'])->name('pecas.store');
Route::get('/pecas/{peca}', [PecasController::class, 'show'])->name('pecas.show');
Route::get('/pecas/{peca}/edit', [PecasController::class, 'edit'])->name('pecas.edit');
Route::put('/pecas/{peca}', [PecasController::class, 'update'])->name('pecas.update');
Route::delete('/pecas/{peca}', [PecasController::class, 'destroy'])->name('pecas.destroy');
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

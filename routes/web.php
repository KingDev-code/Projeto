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
use App\Http\Controllers\AdminController;

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

Route::post('/import-data', 'ImportController@importData');

Route::get('/banco', function () {
    return view('admin.banco');
})->name('banco');

// Rota para a página inicial ("/"). Retorna a view 'welcome'.
Route::get('/', function () {
    return view('welcome');
})->name('index');

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

Route::get('/select', function () {
    return view('select');
});

// Grupo de rotas protegidas pelo middleware de autenticação ('auth').

Route::get('/cadastro', 'App\Http\Controllers\AdminController@registerForm')->name('admin.registerForm');
Route::post('/admin/register', 'App\Http\Controllers\AdminController@register')->name('admin.register');
Route::get('/admin-login', 'App\Http\Controllers\AdminController@loginForm')->name('admin.login');
Route::post('/admin-login', 'App\Http\Controllers\AdminController@adminLogin')->name('admin.loginpost');

//Route::middleware(['auth', 'admin'])->group(function () {
    // Rotas de admin
    Route::get('/admin', 'App\Http\Controllers\AdminController@home')->name('admin');
    
    // Outras rotas protegidas pelo admin
    Route::get('/dadospessoais', 'App\Http\Controllers\AdminController@dadospessoais')->name('dadospessoais');
    Route::get('/tipos', 'App\Http\Controllers\AdminController@tipos')->name('tipos');
    Route::get('/cadastros', 'App\Http\Controllers\AdminController@cadastros')->name('cadastros');
    Route::get('/departamentos', 'App\Http\Controllers\AdminController@departamentos')->name('departamentos');
    Route::get('/estilos', 'App\Http\Controllers\AdminController@estilos')->name('estilos');
    Route::get('/info', 'App\Http\Controllers\AdminController@info')->name('info');
    Route::get('/solicitacoes', 'App\Http\Controllers\AdminController@solicitacoes')->name('solicitacoes');
    Route::get('/combinacoes', 'App\Http\Controllers\AdminController@combinacoes')->name('combinacoes');

    // Rotas para Estilos
    Route::get('/estilos', 'App\Http\Controllers\EstiloController@index')->name('estilos');
    Route::get('/estilos-create', 'App\Http\Controllers\EstiloController@create')->name('estilos.create');
    Route::post('/estilos', 'App\Http\Controllers\EstiloController@store')->name('estilos.store');
    Route::post('/inativar-estilos', 'App\Http\Controllers\EstiloController@inativar')->name('inativar.estilos');
    Route::get('/editar-estilos{id}', 'App\Http\Controllers\EstiloController@edit')->name('editar.estilos');
    Route::put('/estilos/update{id}', 'App\Http\Controllers\EstiloController@update')->name('estilos.update');
    
    // Rotas para Ocasião
    Route::get('/ocasioes', 'App\Http\Controllers\OcasiaoController@create')->name('ocasioes.create');
    Route::post('/ocasioes', 'App\Http\Controllers\OcasiaoController@store')->name('ocasioes.store');
    Route::put('/ocasioes/update{id}', 'App\Http\Controllers\OcasiaoController@update')->name('ocasioes.update');
    Route::post('/inativar-ocasioes', 'App\Http\Controllers\OcasiaoController@inativar')->name('inativar.ocasioes');
    Route::get('/editar-ocasioes{id}', 'App\Http\Controllers\OcasiaoController@edit')->name('editar.ocasioes');
    
    // Rotas para Tipos Corporal
    Route::get('/tipos-create', 'App\Http\Controllers\TipoCorporalController@create')->name('tipos.create');
    Route::post('/tipos-create', 'App\Http\Controllers\TipoCorporalController@store')->name('tipos.store');
    Route::post('/inativar-tipos', 'App\Http\Controllers\TipoCorporalController@inativar')->name('inativar.tipos');
    Route::get('/editar-tipos{id}', 'App\Http\Controllers\TipoCorporalController@edit')->name('editar.tipos');
    Route::put('/tipos/update{id}', 'App\Http\Controllers\TipoCorporalController@update')->name('tipos.update');

    // Rotas para Combinações
    Route::get('/combinacoes-create', 'App\Http\Controllers\CombinacaoController@create')->name('combinacoes.create');
    Route::post('/combinacoes-create', 'App\Http\Controllers\CombinacaoController@store')->name('combinacoes.store');
    Route::post('/inativar-combinacoes', 'App\Http\Controllers\CombinacaoController@inativar')->name('inativar.combinacoes');
    Route::get('/editar-combinacoes{id}', 'App\Http\Controllers\CombinacaoController@edit')->name('editar.combinacoes');
    Route::put('/combinacoes/update{id}', 'App\Http\Controllers\CombinacaoController@update')->name('combinacoes.update');

    
    // ... outras rotas protegidas por autenticação
//});

// Rota de login
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


// Grupo de rotas protegidas pelo middleware de autenticação ('auth').
//Route::middleware(['auth'])->group(function () {
    // Rotas protegidas por middleware 'auth'

    // Rotas para Profile
    Route::get('/profile/edit', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit');
    Route::patch('/profile/update', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
    Route::delete('/profile/destroy', 'App\Http\Controllers\ProfileController@destroy')->name('profile.destroy');

    // Rotas para Favoritos
    Route::get('/favoritos', 'App\Http\Controllers\FavoritoController@index')->name('favoritos');
    Route::post('/favoritos/store', 'App\Http\Controllers\FavoritoController@store')->name('favoritos.store');
    Route::delete('/favoritos/{id}', 'App\Http\Controllers\FavoritoController@destroy')->name('favoritos.destroy');
//});


Route::get('/empresa/register', 'App\Http\Controllers\EmpresaController@registerForm')->name('empresa.registerForm');
Route::post('/empresa/register', 'App\Http\Controllers\EmpresaController@register')->name('empresa.register');

//Route::middleware(['auth:empresa'])->group(function () {
    // Rotas protegidas por middleware 'auth:empresa' (para empresa)

    // Rotas para Empresa
    Route::get('/empresa/edit', 'App\Http\Controllers\EmpresaController@edit')->name('empresa.edit');
    Route::patch('/empresa/update', 'App\Http\Controllers\EmpresaController@update')->name('empresa.update');
    Route::get('/empresa/dashboard', 'App\Http\Controllers\EmpresaController@dashboard')->name('empresa.dashboard');
    Route::get('/empresa/envios', 'App\Http\Controllers\EmpresaController@envios')->name('empresa.envios');
    Route::post('/empresa/upload-image', 'App\Http\Controllers\ImageController@uploadEmpresa')->name('upload.image.empresa');

    // Rota para registro de empresa (se aplicável)

    // Outras rotas da empresa, se necessário
//});


    

    // Rotas para Ocasião
    Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');


    Route::get('/executivos', [OcasiaoController::class, 'executivos'])->name('executivos');
    Route::get('/ocasiao/esportivos', [OcasiaoController::class, 'esportivos'])->name('esportivos');
    Route::get('/ocasiao/comemoracoes', [OcasiaoController::class, 'comemoracoes'])->name('comemoracoes');
    Route::get('/ocasiao/diaadia', [OcasiaoController::class, 'diaadia'])->name('diaadia');
    Route::get('/ocasiao/modapraia', [OcasiaoController::class, 'modapraia'])->name('modapraia');

    // Rotas para Peças
    Route::get('/pecas', [PecasController::class, 'index'])->name('pecas.index');
    Route::get('/pecas/create', [PecasController::class, 'create'])->name('pecas.create');
    Route::post('/pecas', [PecasController::class, 'store'])->name('pecas.store');
    Route::get('/pecas/{peca}', [PecasController::class, 'show'])->name('pecas.show');
    Route::get('/pecas/{peca}/edit', [PecasController::class, 'edit'])->name('pecas.edit');
    Route::put('/pecas/{peca}', [PecasController::class, 'update'])->name('pecas.update');
    Route::delete('/pecas/{peca}', [PecasController::class, 'destroy'])->name('pecas.destroy');

// Inclui rotas de autenticação a partir do arquivo 'auth.php'.
require __DIR__.'/auth.php';
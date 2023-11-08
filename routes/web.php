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


// Rota para a página "/select". Retorna a view 'select'.
Route::get('/select', function () {
    return view('select');
});


// Grupo de rotas protegidas pelo middleware de autenticação ('auth').
Route::middleware('auth')->group(function () {
    Route::get('/profile', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit');
    Route::patch('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
    Route::delete('/profile', 'App\Http\Controllers\ProfileController@destroy')->name('profile.destroy');
});

Route::middleware('auth:empresa')->group(function () {
    // Visualização e edição do perfil da empresa
    Route::get('/dados', 'App\Http\Controllers\Auth\EmpresaController@edit')->name('empresa.edit');
    Route::patch('/update', 'App\Http\Controllers\Auth\EmpresaController@update')->name('empresa.update');
    Route::get('/empresa', function () {
        return view('empresa');
    })->name('empresa.home');

    Route::get('/envios', function () {
        return view('envios');
    })->name('envios');

    Route::post('/upload-image', 'App\Http\Controllers\ImageController@upload')->name('upload.image.cliente');
    Route::post('/upload-image/empresa', 'App\Http\Controllers\ImageController@uploadEmpresa')->name('upload.image.empresa');

    // Rota para o painel da empresa
    Route::get('/dashboard', 'App\Http\Controllers\Auth\EmpresaController@edit')->name('empresa.dashboard');

    // Outras rotas relacionadas à empresa, se necessário


});

    Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
    Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/registrar', 'App\Http\Controllers\Auth\EmpresaController@create')->name('empresa.register');
    Route::post('/registrar', 'App\Http\Controllers\Auth\EmpresaController@store');



// Inclui rotas de autenticação a partir do arquivo 'auth.php'.
require __DIR__.'/auth.php';

    //colocar as rotas aqui
    Route::get('/cadastro', 'App\Http\Controllers\AdminController@registerForm')->name('admin.registerForm');
    Route::post('/admin/register', 'App\Http\Controllers\AdminController@register')->name('admin.register');
    Route::get('/admin', 'App\Http\Controllers\AdminController@home')->name('admin');
    Route::get('/dadospessoais', 'App\Http\Controllers\AdminController@dadospessoais')->name('dadospessoais');


    //Route::middleware('admin')->group(function () {


    // Outras rotas protegidas para administradores
    Route::get('/tipos', 'App\Http\Controllers\AdminController@tipos')->name('tipos');
    Route::get('/cadastros', 'App\Http\Controllers\AdminController@cadastros')->name('cadastros');
    Route::get('/departamentos', 'App\Http\Controllers\AdminController@departamentos')->name('departamentos');
    Route::get('/estilos', 'App\Http\Controllers\AdminController@estilos')->name('estilos');
    Route::get('/info', 'App\Http\Controllers\AdminController@info')->name('info');
    Route::get('/solicitacoes', 'App\Http\Controllers\AdminController@solicitacoes')->name('solicitacoes');
    Route::get('/comb', 'App\Http\Controllers\AdminController@combinacoes')->name('comb');


    // Rotas para Estilos
    Route::get('/estilos', 'App\Http\Controllers\EstiloController@index')->name('estilos');
    Route::get('/estilos-create', 'App\Http\Controllers\EstiloController@create')->name('estilos.create');
    Route::post('/estilos', 'App\Http\Controllers\EstiloController@store')->name('estilos.store');

    Route::post('/inativar-estilos', 'App\Http\Controllers\EstiloController@inativar')->name('inativar.estilos');
    Route::get('/editar-estilos{id}', 'App\Http\Controllers\EstiloController@edit')->name('editar.estilos');
    Route::put('/estilos/update/{id}', 'App\Http\Controllers\EstiloController@update')->name('estilos.update');

    // Rotas para Ocasião
    Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');

    Route::get('/ocasioes', 'App\Http\Controllers\OcasiaoController@create')->name('ocasioes.create');
    Route::post('/ocasioes', 'App\Http\Controllers\OcasiaoController@store')->name('ocasioes.store');
    Route::put('/ocasioes/update/{id}', 'App\Http\Controllers\OcasiaoController@update')->name('ocasioes.update');

    Route::post('/inativar-ocasioes', 'App\Http\Controllers\OcasiaoController@inativar')->name('inativar.ocasioes');
    Route::get('/editar-ocasioes{id}', 'App\Http\Controllers\OcasiaoController@edit')->name('editar.ocasioes');


    Route::get('/executivos', [OcasiaoController::class, 'executivos'])->name('executivos');
    Route::get('/ocasiao/esportivos', [OcasiaoController::class, 'esportivos'])->name('esportivos');
    Route::get('/ocasiao/comemoracoes', [OcasiaoController::class, 'comemoracoes'])->name('comemoracoes');
    Route::get('/ocasiao/diaadia', [OcasiaoController::class, 'diaadia'])->name('diaadia');
    Route::get('/ocasiao/modapraia', [OcasiaoController::class, 'modapraia'])->name('modapraia');

    // Rotas para Tipos Corporal
    Route::get('/tipos', [TipoCorporalController::class, 'create'])->name('tipos.create');
    Route::post('/tipos', [TipoCorporalController::class, 'store'])->name('tipos.store');

    /*Route::get('/tipo', [TipoController::class, 'index'])->name('tipos');
    Route::post('/inativar-tipos', [TipoController::class, 'inativar'])->name('inativar.tipos');
    Route::get('/editar-tipos/{id}', [TipoController::class, 'edit'])->name('editar.tipos');
    Route::put('/tipos/update/{id}', [TipoController::class, 'update'])->name('tipos.update');*/


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
//});
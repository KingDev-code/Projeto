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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:empresa')->group(function () {
    // Visualização e edição do perfil da empresa
    Route::get('/dados', [EmpresaController::class, 'edit'])->name('empresa.edit');
    Route::patch('/update', [EmpresaController::class, 'update'])->name('empresa.update');
    Route::get('/empresa', function () {
        return view('empresa');
    })->name('empresa.home');

    Route::get('/envios', function () {
        return view('envios');
    })->name('envios');   

    Route::post('/upload-image', [ImageController::class, 'upload'])->name('upload.image.cliente');
    Route::post('/upload-image/empresa', [ImageController::class, 'uploadEmpresa'])->name('upload.image.empresa');

    // Rota para o painel da empresa
    Route::get('/dashboard', [EmpresaController::class, 'edit'])->name('empresa.dashboard');

    // Outras rotas relacionadas à empresa, se necessário

    
});



// Rota de exibição do formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rota de processamento do formulário de login
Route::post('/login', [LoginController::class, 'Login']);

// Rota de logout
Route::post('/logout', [LoginController::class, 'Logout'])->name('logout');



// Rota para exibir o formulário de registro da empresa
Route::get('/registrar', [EmpresaController::class, 'create'])->name('empresa.register');

// Rota para processar o registro da empresa
Route::post('/registrar', [EmpresaController::class, 'store']);

// Inclui rotas de autenticação a partir do arquivo 'auth.php'.
require __DIR__.'/auth.php';


// Rotas para o registro de administradores
Route::get('/cadastro', [AdminController::class, 'registerForm'])->name('admin.registerForm');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');



Route::middleware('admin')->group(function () {
    // Painel de controle do administrador
    Route::get('/admin', [AdminController::class, 'home'])->name('admin');

    // Outras rotas protegidas para administradores
    Route::get('/dadospessoais', [AdminController::class, 'dadospessoais'])->name('dadospessoais');
    Route::get('/tipos', [AdminController::class, 'tipos'])->name('tipos');
    Route::get('/cadastros', [AdminController::class, 'cadastros'])->name('cadastros');
    Route::get('/departamentos', [AdminController::class, 'departamentos'])->name('departamentos');
    Route::get('/estilos', [AdminController::class, 'estilos'])->name('estilos');
    Route::get('/info', [AdminController::class, 'info'])->name('info');
    Route::get('/solicitacoes', [AdminController::class, 'solicitacoes'])->name('solicitacoes');
    Route::get('/comb', [AdminController::class, 'combinacoes'])->name('comb');



    // Rotas para Estilos 
    Route::get('/estilos', [EstiloController::class, 'index'])->name('estilos.index');
    Route::get('/estilos/create', [EstiloController::class, 'create'])->name('estilos.create');
    Route::post('/estilos', [EstiloController::class, 'store'])->name('estilos.store');

    // Rotas para Ocasião
    Route::get('/combinacoes', [CombinacaoController::class, 'index'])->name('combinacoes.index');

    Route::get('/ocasioes', [OcasiaoController::class, 'create'])->name('ocasioes.create');
    Route::post('/ocasioes', [OcasiaoController::class, 'store'])->name('ocasioes.store');
    

    Route::get('/executivos', [OcasiaoController::class, 'executivos'])->name('executivos');
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
});

Route::post('/inativar-ocasioes', [OcasiaoController::class, 'inativar'])->name('inativar.ocasioes');
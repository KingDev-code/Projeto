@extends('layouts.usuario')

@section('conteudo')
    <link rel="stylesheet" href="css/menu-resp.css">
    <link rel="stylesheet" href="css/footer-resp.css">
    <link rel="stylesheet" href="css/categoria.css">
    <link rel="stylesheet" href="css/categoria-resp.css">

    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Escolha o Tipo de Usuário') }}</div>

                    <a href="{{ route('login', ['tipo' => 'usuario']) }}" class="btn btn-primary">Usuário Comum</a>
                    <a href="{{ route('login', ['tipo' => 'empresa']) }}" class="btn btn-primary">Empresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection

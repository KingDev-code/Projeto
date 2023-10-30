@extends('layouts.usuario')

@section('conteudo')

<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/dashboard-resp.css">

<!-- Dashboard -->
<div class="dashboard">

    <!-- Barra Lateral do Menu -->
    <nav class="menu-lateral">
        <ul>
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Perfil</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Estatísticas</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><h1><a href="{{ route('ocasioes.create') }}">Adicionar Ocasião</a></h1></li>
            <li><h1><a href="{{ route('estilos.create') }}">Adicionar Estilo</a></h1></li>
            <li><h1><a href="{{ route('tiposcorporal.create') }}">Adicionar Tipo Corporal</a></h1></li>
            <li><h1><a href="{{ route('combinacoes.create') }}">Adicionar Combinação</a></h1></li>
            <li><h1><a href="{{ route('pecas.create') }}">Adicionar Peça</a></h1></li>
        </ul>
    </nav>

    <!-- Conteúdo do Dashboard -->
    <div class="dashboard-conteudo">
        <h1>Bem-vindo ao Dashboard</h1>
        <p>Este é o painel de controle da sua empresa.</p>
    </div>
</div>

@endsection
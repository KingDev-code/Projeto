<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar Dados</title>
</head>
<body>
    <h1>Formulários de Importação</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="{{ route('import.genero') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="csv_file">Importar Dados para Tabela 'Genero'</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

    <form action="{{ route('import.estilo') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Formulário para Estilo -->
        <label for="csv_file">Importar Dados para Tabela 'Estilo'</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

    <form action="{{ route('import.tipocorporal') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Formulário para Tipo Corporal -->]
        <label for="csv_file">Importar Dados para Tabela 'Tipo Corporal'</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

    <form action="{{ route('import.ocasiao') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Formulário para Ocasiao -->
        <label for="csv_file">Importar Dados para Tabela 'Ocasião'</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

    <form action="{{ route('import.combinacao') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Formulário para Combinacao -->
        <label for="csv_file">Importar Dados para Tabela 'Combinacao'</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

    <!-- Formulário para Pecas -->
    <form action="{{ route('import.pecas') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="csv_file_peca">Importar Dados para Tabela 'Peca'</label>
        <input type="file" name="csv_file_peca" accept=".csv">
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
@extends('layouts.usuario')

@section('content')
    <div class="container">
        <h1>Importar Dados</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('import-data') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="csv_file">Selecione um arquivo CSV:</label>
                <input type="file" name="csv_file" id="csv_file" accept=".csv">
            </div>
            <button type="submit" class="btn btn-primary">Importar</button>
        </form>
    </div>
@endsection
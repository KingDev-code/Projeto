<?php

namespace App\Http\Controllers;

use App\Models\Ocasiao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function importGenero(Request $request)
    {
        return $this->importTable($request, 'genero', ['genero']);
    }

    public function importEstilo(Request $request)
    {
        return $this->importTable($request, 'estilo', ['estilo']);
    }

    public function importTipoCorporal(Request $request)
    {
        return $this->importTable($request, 'tipocorporal', ['tipocorporal', 'icone']);
    }

    public function importOcasiao(Request $request)
    {
        return $this->importTable($request, 'ocasiao', ['ocasiao']);
    }

    public function importCombination(Request $request)
    {
        // Add the necessary columns based on your combination table structure
        return $this->importTable($request, 'combinacao', [
            'cod_estilo', 'cod_tipocorporal', 'cod_ocasiao',
            'cod_login', 'cod_genero', 'img_comb', 'link_comb',
            'ocasiaoespecif_comb'
        ]);
    }

    public function importPeca(Request $request)
    {
        // Adicione as colunas necessárias com base na estrutura da sua tabela 'Peca'
        return $this->importTable($request, 'peca', [
            'cod_comb', 'desc_peca', 'preco_peca', 'img_peca', 'link'
        ]);
    }

    private function importTable(Request $request, $tableName, $columns)
    {
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            if ($file->isValid()) {
                $path = $file->getRealPath();
                $data = array_map('str_getcsv', file($path));

                foreach ($data as $row) {
                    $insertData = [];
                    foreach ($columns as $key => $column) {
                        $insertData[$column] = $row[$key];
                    }

                    DB::table($tableName)->insert($insertData);
                }

                return redirect()->back()->with('success', "Dados de $tableName importados com sucesso.");
            }
        }

        return redirect()->back()->with('error', "Erro na importação de dados de $tableName.");
    }
}
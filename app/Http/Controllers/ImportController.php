<?php

namespace App\Http\Controllers;

use App\Models\Ocasiao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function importData(Request $request)
{
    if ($request->hasFile('csv_file')) {
        $file = $request->file('csv_file');

        if ($file->isValid()) {
            $path = $file->getRealPath();
            $data = array_map('str_getcsv', file($path));

            foreach ($data as $row) {
                DB::table('combinacao')->insert([
                    'cod_estilo' => (int)$row[1], // Certifique-se de que seja um inteiro
                    'cod_tipocorporal' => (int)$row[2], // Certifique-se de que seja um inteiro
                    'cod_ocasiao' => (int)$row[3], // Certifique-se de que seja um inteiro
                    'cod_login' => (int)$row[4], // Certifique-se de que seja um inteiro
                    'cod_genero' => (int)$row[5], // Certifique-se de que seja um inteiro
                    'img_comb' => $row[6], // Imagem (verifique o formato)
                    'link_comb' => $row[7],
                    'ocasiaoespecif_comb' => $row[8],
                ]);
            }

            return redirect()->back()->with('success', 'Dados de estilo importados com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro na importação de dados de estilo.');
}
}

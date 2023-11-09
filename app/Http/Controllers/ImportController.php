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
                    'cod_estilo' => $row[0],
                    'cod_tipocorporal' => $row[1],
                    'cod_ocasiao' => $row[2],
                    'cod_login' => $row[3],
                    'cod_genero' => $row[4],
                    'img_comb' => $row[5],
                    'link_comb' => $row[6],
                    'ocasiaoespecif_comb' => $row[7],
                ]);
            }

            return redirect()->back()->with('success', 'Dados de estilo importados com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro na importação de dados de estilo.');
}
}

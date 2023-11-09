<?php

namespace App\Http\Controllers;

use App\Models\Ocasiao;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function importData(Request $request)
{
    // Verifique se um arquivo CSV foi enviado
    if ($request->hasFile('csv_file')) {
        $file = $request->file('csv_file');

        // Verifique se o arquivo é válido e faça a importação
        if ($file->isValid()) {
            $path = $file->getRealPath();
            $data = array_map('str_getcsv', file($path));

            // Percorra os dados e insira no banco de dados
            foreach ($data as $row) {
                Ocasiao::create([
                    'cod_ocasiao' => $row[0],
                    'ocasiao' => $row[1],
                ]);
            }

            return redirect()->back()->with('success', 'Dados importados com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro na importação.');
}
}

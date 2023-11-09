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
                DB::table('estilo')->insert([
                    'Clássico' => $row[1],
                ]);
            }

            return redirect()->back()->with('success', 'Dados de estilo importados com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro na importação de dados de estilo.');
}
}

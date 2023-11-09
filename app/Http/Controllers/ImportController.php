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
                DB::table('estado')->insert([
                    'estado' => $row[0],
                ]);
            }

            return redirect()->back()->with('success', 'Dados de estado importados com sucesso.');
        }
    }

    return redirect()->back()->with('error', 'Erro na importação de dados de estado.');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Peca;
use App\Models\Ocasiao;
use App\Models\Combinacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function importGenero(Request $request)
    {
        if ($request->hasFile('csv_file_genero')) {
            $file = $request->file('csv_file_genero');
    
            if ($file->isValid()) {
                $path = $file->getRealPath();
                $data = array_map('str_getcsv', file($path));
    
                foreach ($data as $row) {
                    DB::table('genero')->insert([
                        'genero' => $row[1],
                    ]);
                }
    
                return redirect()->back()->with('success', 'Dados de Gênero importados com sucesso.');
            }
        }
    
        return redirect()->back()->with('error', 'Erro na importação de dados de Gênero.');
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
        if ($request->hasFile('csv_file_combination')) {
            $file = $request->file('csv_file_combination');
    
            if ($file->isValid()) {
                $path = $file->getRealPath();
                $data = array_map('str_getcsv', file($path));
    
                foreach ($data as $row) {
                    DB::table('combinacao')->insert([
                        'cod_estilo' => $row[1],
                        'cod_tipocorporal' => $row[2],
                        'cod_ocasiao' => $row[3],
                        'cod_login' => $row[4],
                        'cod_genero' => $row[5],
                        'img_comb' => $row[6],
                        'link_comb' => $row[7],
                        'ocasiaoespecif_comb' => $row[8],
                    ]);
                }
    
                return redirect()->back()->with('success', 'Dados de Combinação importados com sucesso.');
            }
        }
    
        return redirect()->back()->with('error', 'Erro na importação de dados de Combinação.');
    }

    public function importPeca(Request $request)
    {
        if ($request->hasFile('csv_file_peca')) {
            $file = $request->file('csv_file_peca');

            if ($file->isValid()) {
                $path = $file->getRealPath();
                $data = array_map('str_getcsv', file($path));

                foreach ($data as $row) {
                    DB::table('peca')->insert([
                        'desc_peca' => $row[1],
                        'preco_peca' => $row[2],
                        'img_peca' => $row[3],
                        'link' => $row[4],
                    ]);
                }

                return redirect()->back()->with('success', 'Dados de Peca importados com sucesso.');
            }
        }

        return redirect()->back()->with('error', 'Erro na importação de dados de Peca.');
    }

    public function adicionarImagens()
    {
        for ($i = 1; $i <= 395; $i++) {
            $nomeImagem = "comb-{$i}.png";
    
            // Substituir a coluna img_comb
            Combinacao::where('cod_combinacao', $i) // Assumindo que 'id' é uma chave primária sequencial
                ->update(['img_comb' => $nomeImagem]);
        }
    
        return "Nomes de imagens substituídos com sucesso!";
    }

    public function exibirFormularioAdicionarImagens()
    {
        return view('adicionar-imagens');
    }

    public function substituirImagensPecas()
    {
    // Recupere as combinações existentes ordenadas pelo cod_comb
    $combinacoes = Peca::select('cod_comb')->distinct()->orderBy('cod_comb')->get();

    foreach ($combinacoes as $combinacao) {
        $numeroPeca = 1; // Reinicia o número de peça para 1

        $numeroPecas = 5; // Ajuste conforme necessário

        for ($j = 1; $j <= $numeroPecas; $j++) {
            $nomePeca = "comb{$combinacao->cod_comb}-peca{$numeroPeca}.png";

            // Substituir o campo img_peca
            Peca::where([
                'cod_comb' => $combinacao->cod_comb,
                'img_peca' => "comb{$combinacao->cod_comb}-peca{$j}.png",
            ])->update([
                'img_peca' => $nomePeca,
            ]);

            $numeroPeca++;

            // Se o número de peça atingir 6, reinicie para 1
            if ($numeroPeca > $numeroPecas) {
                $numeroPeca = 1;
            }
        }
    }

        return "Nomes de imagens de peças substituídos com sucesso!";
    }

    public function exibirFormularioSubstituirImagensPecas()
    {
        return view('imagens-pecas');
    }
}
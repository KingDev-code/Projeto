<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // Atualize o nome do arquivo no banco de dados
            auth()->user()->update(['img_cliente' => $imageName]);

            return redirect()->back()->with('success', 'Imagem enviada com sucesso.');
        }

        return redirect()->back()->with('error', 'Falha ao enviar a imagem.');
    }

    public function uploadEmpresa(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // Atualize o nome do arquivo no banco de dados para a empresa autenticada
            auth('empresa')->user()->update(['img_empresa' => $imageName]);

            return redirect()->back()->with('success', 'Imagem enviada com sucesso.');
        }

        return redirect()->back()->with('error', 'Falha ao enviar a imagem.');
    }
}
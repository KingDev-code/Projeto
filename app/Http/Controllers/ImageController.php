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

            // Você também pode salvar o nome do arquivo no banco de dados se desejar
            auth()->user()->update(['img_cliente' => $imageName]);

            return redirect()->back()->with('success', 'Imagem enviada com sucesso.');
        }

        return redirect()->back()->with('error', 'Falha ao enviar a imagem.');
    }
}
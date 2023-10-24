<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Empresa
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            return $next($request);
        }

        return redirect('/login');
    }

    public function terminate($request, $response)
    {
        // Executa ações após a resposta ter sido enviada.
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomUserProvider extends ServiceProvider
{

    public function retrieveByCredentials(array $credentials)
    {
        $user = Empresa::where('email', $credentials['email'])->first();

        if (!$user) {
            $user = User::where('email', $credentials['email'])->first();
        }

        return $user;
    }

    public function retrieveById($identifier)
    {
        $user = Empresa::find($identifier);

        if (!$user) {
            $user = User::find($identifier);
        }

        return $user;
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

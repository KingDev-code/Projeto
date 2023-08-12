<x-guest-layout>

<div class="container">
<h1> CADASTRAR-SE </h1>
    <form method="POST" action="{{ route('register') }}">
    <link rel="stylesheet" href="/css/register.css">
    <script src="/js/register.js"></script>
        @csrf

        <!-- Name -->
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="nome" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <br><br>

        <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <br><br>

        <!-- Password -->
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="senha" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <br><br>

        <!-- Confirm Password -->
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="confirmar_senha" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <br><br>

            <input class="cadastrar" type="submit" value="{{ __('Cadastrar') }}">
            <br><br><br>

        <a class="login" href="{{ route('login') }}">
            <h4>
                {{ __('Já sou cadastrado - Fazer Login') }}
            </h4>
        </a>

    </form>
</div>
</x-guest-layout>
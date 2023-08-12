<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <div class="container">
    <h1> Logar </h1>
    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <br><br>

    <!-- Password -->
        <x-input-label for="password" :value="__('Senha')" />
        <x-text-input id="senha" type="password" name="password" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    <br><br><br>

    <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="container-checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                <h2 class="manter">{{ __('Manter-me conectado') }}</h2>
                <span class="checkmark"></span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="esq_senha" href="{{ route('password.request') }}">
                <h4>
                    {{ __('Esqueci minha senha') }}
                </h4>
                </a>
            @endif

            <input class="entrar" type="submit" value="{{ __('Entrar') }}" style="width: 80px;">
            <br><br><br>
            <div class="flex items-center justify-end mt-4">
            @if (Route::has('register'))
                <a class="login" href="{{ route('register') }}" style="margin-top: -40px;">
                    <h4>
                    {{ __('Ainda não sou cadastrado - Cadastrar-me') }}
                    </h4>
                </a>
            @endif
        </div>
    </form>
  </div>

</x-guest-layout>

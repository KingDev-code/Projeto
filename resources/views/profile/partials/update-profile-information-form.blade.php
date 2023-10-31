<section>
    <!-- Formulário para enviar verificação de email -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf <!-- Gera um campo de token de autenticação CSRF -->
    </form>

    <!-- Formulário para atualizar o perfil do usuário -->
    <form method="post" action="{{ route('profile.update') }}">
        @csrf <!-- Gera um campo de token de autenticação CSRF -->
        @method('patch') <!-- Método HTTP PATCH para atualização do perfil -->

        <div>
            <!-- Rótulo e campo de entrada para o nome do usuário -->
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', auth()->user()->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <!-- Rótulo e campo de entrada para o email do usuário -->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', auth()->user()->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            <!-- Verifica se o usuário precisa verificar seu email -->
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        <!-- Mensagem informando que o email do usuário não foi verificado -->
                        {{ __('Seu endereço de email não foi verificado.') }}

                        <!-- Botão para reenviar o email de verificação -->
                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Clique aqui para reenviar o email de verificação.') }}
                        </button>
                    </p>

                    <!-- Mensagem de confirmação após o reenvio do email de verificação -->
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Um novo link de verificação foi enviado para o seu endereço de email.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <!-- Botão para salvar as alterações no perfil -->
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            <!-- Mensagem de confirmação após salvar as alterações no perfil -->
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Salvo.') }}</p>
            @endif
        </div>
    </form>
</section>

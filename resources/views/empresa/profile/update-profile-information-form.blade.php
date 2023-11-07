<section>
    <!-- Formulário para enviar e-mail de verificação -->

    <!-- Formulário principal para atualizar o perfil do usuário -->
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch') <!-- Método HTTP PATCH para atualizar os dados -->

        <div>
            <x-input-label for="name" :value="__('Nome')" /> <!-- Rótulo do campo de nome -->
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" /> <!-- Campo de entrada para o nome do usuário -->
            <x-input-error class="mt-2" :messages="$errors->get('name')" /> <!-- Exibe erros relacionados ao campo de nome, se houver algum -->
        </div>

        <div>
            <x-input-label for="email" :value="__('E-mail')" /> <!-- Rótulo do campo de e-mail -->
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" /> <!-- Campo de entrada para o e-mail do usuário -->
            <x-input-error class="mt-2" :messages="$errors->get('email')" /> <!-- Exibe erros relacionados ao campo de e-mail, se houver algum -->

            <!-- Verifica se o usuário deve verificar seu e-mail -->
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <!-- Mensagem para informar que o e-mail do usuário não foi verificado -->
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Seu endereço de e-mail não foi verificado.') }}

                        <!-- Botão para reenviar o e-mail de verificação -->
                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Clique aqui para reenviar o e-mail de verificação.') }}
                        </button>
                    </p>

                    <!-- Mensagem para informar que um novo link de verificação foi enviado -->
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Um novo link de verificação foi enviado para o seu endereço de e-mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Botão "Salvar" para enviar o formulário de atualização -->
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            <!-- Mensagem de confirmação após a atualização -->
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

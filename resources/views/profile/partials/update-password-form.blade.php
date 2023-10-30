<section>
    <!-- CSS -->
    <link rel="stylesheet" href="css/footer-resp.css">
    <link rel="stylesheet" href="css/menu-resp.css">
    <link rel="stylesheet" href="css/dadospessoais.css">
    <link rel="stylesheet" href="css/dadospessoais-resp.css">

                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    <div class="combinacoes-looks">

                    <div class="title-section">
                        <h2 class="section-title"><b>ATUALIZAR SENHA</b></h2>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Certifique-se de que sua conta está usando uma senha longa e aleatória para manter a segurança.') }}
                        </p>
                        </div>

                    <div class="forms">
                        <div>
                        <label for="current_password">SENHA ATUAL: <input type="password" id="current_password" name="current_password" autocomplete="current-password" required></label>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div>
                        <label for="password">NOVA SENHA: <input type="password" id="senha" name="password" autocomplete="new-password" required></label>
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                        <label for="password_confirmation">CONFIRMAR NOVA SENHA: <input type="password" id="senha" name="password_confirmation" autocomplete="new-password" required></label>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <button type="submit">SALVAR</button>

                        <div class="flex items-center gap-4">
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Salvo.') }}</p>
                        @endif
                    </div>
                        

                        </div>
                    </div>
                </form>

</section>

<section>
    <!-- CSS -->
    <link rel="stylesheet" href="css/footer-resp.css">
    <link rel="stylesheet" href="css/menu-resp.css">
    <link rel="stylesheet" href="css/dadospessoais.css">
    <link rel="stylesheet" href="css/dadospessoais-resp.css">


        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')
             
            <div class="combinacoes-looks">

              <div class="title-section">
                  <h2 class="section-title"><b>DESATIVAR CONTA</b></h2>
                  <p>Tem certeza de que deseja excluir sua conta?</p>
                </div>

              <div class="forms">
                  <label for="password">SENHA: <input type="password" id="senha" name="password" required></label>

                  <button type="submit">Excluir Conta</button>
                  

                </div>
            </div>
            
        </form>
</section>

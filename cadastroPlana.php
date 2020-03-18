<?php 
    include_once "..\codigosPHP\includes\headCadastroInc.html";
    session_start();

    if(isset($_SESSION['idUsuario'])){
      session_destroy();
    }
?>
<div id="menu">
    <div id="imgMenu"></div>
    <ul>
        <a data-toggle="modal" data-target="#exampleModal">Login</a>
        <a class="enabled">Cadastre-se</a>
    </ul>
</div>
<section id="sectionPrincipal">
    <div id="imgPrincipal">
        <img src="../codigosCSS/imgs/fotoSection.png" title="notebookcadstro">
    </div>
    <div id="cadastroForm">

        <div id="textosCadastra">
          <h1>Cadastre-se!</h1>
          <h2>É grátis!</h2>
          <img src="../codigosCSS/imgs/aviaoTracejado.png" alt="">
        </div>

        <div id="formCadastro">
          <form method="post" action="../codigosPHP/cadastraPessoa.php">
            <div id="divQuebrada">
              <div>
                <label for="nomeCadastro">Nome:</label>
                <input type="text" name="nomeCadastro" id="nomeCadastro" placeholder="Digite seu nome" required>
              </div>
              <div>
                <label for="sobrenomeCadastro">Sobrenome:</label>
                <input type="text" name="sobrenomeCadastro" id="sobrenomeCadastro" placeholder="Digite seu sobrenome" required>
              </div>
            </div>
            <div>
              <label for="emailCadastro">E-mail:</label>
              <input type="email" name="emailCadastro" id="emailCadastro" placeholder="Digite seu E-mail" required>
            </div>
            <div>
              <label for="senhaCadastro">Senha:</label>
              <input type="password" name="senhaCadastro" id="senhaCadastro" placeholder="Digite sua senha" required>
            </div>
            <div>
              <label for="cnfSenhaCadastro">Confirme sua senha:</label>
              <input type="password" name="cnfSenhaCadastro" id="cnfSenhaCadastro" placeholder="Confirme sua senha" required>
            </div>
            <input type="submit" value="Enviar">
          </form>
          <?php 
            if(isset($_SESSION['cadastrou'])){
              echo "<h6 id='textCadastrou'>Conta cadastrada com sucesso!</h6>";
              session_destroy();  
            }
          ?>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: keepCalm">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../codigosPHP/logaPessoa.php" method="post">
        <div class="modal-body">
          <div id="loginForm">
            <div>
              <label for="emailLogin">Email:</label>
              <input type="email" name="emailLogin" id="emailLogin" placeholder="Digite seu email" required>
            </div>
            <div>
              <label for="senhaLogin">Senha:</label>
              <input type="password" name="senhaLogin" id="senhaLogin" placeholder="Digite sua senha" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-info" style="background: #025467" value="Entrar">
        </div>
      </div>
    </form>
  </div>
</div>

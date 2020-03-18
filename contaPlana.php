<?php 
    include_once "..\codigosPHP\includes\headInc.html";
    include_once "..\codigosPHP\dadosPessoa.php";
    
    if(!isset($_SESSION['idUsuario'])){
        header("location:cadastroPlana.php");
    }
    $caminho = $pessoaDAO->selectImgPessoa($_SESSION['idUsuario']);
    $restoDoCaminho = "../codigosCSS/upload/";
    if($caminho != null){
        $novoCaminho = $restoDoCaminho.$caminho;
    }else{
        $novoCaminho = "../codigosCSS/imgs/imgAvatar.png";
    }
?>
<section class = "bemVindoConta">
    <div class = "textosConta">
        <h1>Analise seus dados</h1>
        <h2>por aqui</h2>
    </div>
    <div class = "bemVindoFoto" ></div>
</section>
<section class = "dadosConta"> 
    <div class = "imgConta" data-toggle="modal" data-target="#criaModalImage" style="background-image:url(<?php echo $novoCaminho?>)"> 
    </div>
    <form action="../codigosPHP/updatePessoa.php" method="post">
        <div class = "formularioConta">
            <div>
                <div>
                    <label for="nomeConta">Nome:</label>
                    <input type="text" name="nomeConta" id="nomeConta" placeholder="Digite seu nome" required>
                </div>
                <div>
                    <label for="sobrenomeConta">Sobrenome:</label>
                    <input type="text" name="sobrenomeConta" id="sobrenomeConta" placeholder="Digite seu sobrenome" required>
                </div>
            </div>
            <div id="conta">
                <label for="emailConta">Conta:</label>
                <input type="email" name="emailConta" id="emailConta" placeholder="Digite seu email" required>
            </div>
            <div>
                <div>
                    <label for="senhaConta">Senha:</label>
                    <input type="password" name="senhaConta" id="senhaConta" placeholder="Digite sua nova senha" required>
                </div>
                <div>
                    <label for="cnfSenhaConta">Confirme sua senha:</label>
                    <input type="password" name="cnfSenhaConta" id="cnfSenhaConta" placeholder="Confirme sua nova senha" required>
                </div>
            </div>
        </div>
        <input type="submit" value="Salvar">
    </form>
</section>
<div class="modal fade" id="criaModalImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: keepCalm">Personalize</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../codigosPHP/criaImagemPessoa.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="contaImgForm">
            <div>
                <label for="imgConta">Foto de perfil:</label>
                <input type="file" name="imgConta" id="imgConta" placeholder="Digite o título" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-info" style="background: #025467" value="Salvar">
        </div>
      </div>
    </form>
  </div>
</div>
 <?php 
    include_once "../codigosPHP/includes/footerInc.html";
?>
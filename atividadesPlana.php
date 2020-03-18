<?php 
    include_once "..\codigosPHP\includes\headInc.html";
    include_once "..\codigosPHP\dadosAtividade.php";

    if(!isset($_SESSION['idUsuario'])){
        header("location:cadastroPlana.php");
    }
    $atividade = $atividadeDao->read($_SESSION['idUsuario']);
?>
<section class="atividadesCards">
    <div class="cartaoGroup">
        <div class="cartao main">
            <a data-toggle="modal" data-target="#criaModal">+</a>
            <p>Criar atividade</p>
        </div>
        <?php
          if(!isset($_SESSION['semAtv'])){
            foreach($atividade as $b){
              echo '<div class="cartao">'.
                      '<p class="titulo">'.$b['titulo'].'</p>'.
                      '<p class="titulop">Descrição:</p>'.
                      '<p>'.$b['descricao'].'</p>'.
                      '<p class="titulop">Dia que recebeu a atividade</p>'.
                      '<p>'.$b['dataRecebimento'].'</p>'.
                      '<p class="titulop">Dia da entrega</p>'.
                      '<p>'.$b['dataEntrega'].'</p>'.
                    '</div>';
            }
          }else{
              echo "<div class="."aviso".">
                      <h1>
                        Crie sua atividade!
                      </h1>
                      <p>
                        É só clicar no botão ao lado  
                    </div>";
          }
        ?>
    </div>
</section>
<section class="atividadesPendentes">
    <?php
  if(!isset($_SESSION['semAtv'])){
    date_default_timezone_set('America/Sao_Paulo');
    foreach($atividade as $b){
      $dataEntrega = $b['dataEntrega'];
      $dataAtual = date('Y-m-d');
      $dataFalta = (strtotime($dataEntrega) - strtotime($dataAtual))/86400;
      if($dataFalta == 0){
        echo '<div class="atvFalta branco">'.
              '<div class="cont">'.
                  '<h1>Hoje</h1>'.
                  '<div class="atvFaltaTextos">'.
                    '<h5>'.$b['titulo'].'</h5>'.
                    '<p>'.$b['descricao'].'</p>'.
                  '</div>'.
                '</div>'.
              '</div>';
      }else if($dataFalta == 1){
        echo '<div class="atvFalta azul">'.
              '<div class="cont">'.
                  '<h1>'.$dataFalta.' dia</h1>'.
                  '<div class="atvFaltaTextos">'.
                    '<h5>'.$b['titulo'].'</h5>'.
                    '<p>'.$b['descricao'].'</p>'.
                  '</div>'.
                '</div>'.
              '</div>';
      }else if($dataAtual <= 5 != 1){
          echo '<div class="atvFalta amarelo">'.
                '<div class="cont">'.
                    '<h1>'.$dataFalta.' dias</h1>'.
                    '<div class="atvFaltaTextos">'.
                      '<h5>'.$b['titulo'].'</h5>'.
                      '<p>'.$b['descricao'].'</p>'.
                    '</div>'.
                  '</div>'.
                '</div>';
        }else if($dataAtual > 5){
            echo '<div class="atvFalta">'.
                  '<div class="cont">'.
                      '<h1>Hoje</h1>'.
                      '<div class="atvFaltaTextos">'.
                        '<h5>'.$b['titulo'].'</h5>'.
                        '<p>'.$b['descricao'].'</p>'.
                      '</div>'.
                    '</div>'.
                  '</div>';
          }
        }
      }else {
      echo "";
  }
?>
</section>
<div class="modal fade" id="criaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: keepCalm">Crie atividades!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../codigosPHP/criaAtividade.php" method="post">
        <div class="modal-body">
          <div class="atividadeForm">
            <div>
                <label for="">Título:</label>
                <input type="text" name="tituloAtividade" id="tituloAtividade" placeholder="Digite o título" required>
            </div>
            <div>
                <label for="">Descrição:</label>
                <input type="text" name="descricaoAtividade" id="descricaoAtividade" placeholder="Digite a descrição" required> 
            </div>
            <div>
                <label for="">Data de recebimento:</label>
                <input type="date" name="dataRecebimentoAtividade" id="dataRecebimentoAtividade" required>
            </div>
            <div>
                <label for="">Data de entrega:</label>
                <input type="date" name="dataEntregaAtividade" id="dataEntregaAtividade" required>
            </div>
            <div>
                <label for="">Prioridade</label>
                <input type="checkbox" value="importante" name="prioridadeAtividade" id="prioridadeAtividade">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-info" style="background: #025467" value="Enviar">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="mudaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: keepCalm">Deseja mudar algo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../codigosPHP/criaAtividade.php" method="post">
        <div class="modal-body">
          <div class="atividadeForm">
            <div>
                <label for="">Título:</label>
                <input type="text" name="tituloAtividade" id="tituloAtividade" placeholder="Digite o título" required>
            </div>
            <div>
                <label for="">Descrição:</label>
                <input type="text" name="descricaoAtividade" id="descricaoAtividade" placeholder="Digite a descrição" required> 
            </div>
            <div>
                <label for="">Data de recebimento:</label>
                <input type="date" name="dataRecebimentoAtividade" id="dataRecebimentoAtividade" required>
            </div>
            <div>
                <label for="">Data de entrega:</label>
                <input type="date" name="dataEntregaAtividade" id="dataEntregaAtividade" required>
            </div>
            <div>
                <label for="">Prioridade</label>
                <input type="checkbox" value="importante" name="prioridadeAtividade" id="prioridadeAtividade">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-info" style="background: #025467" value="Enviar">
        </div>
      </div>
    </form>
  </div>
</div>
 <?php 
    include_once "../codigosPHP/includes/footerInc.html";
?>
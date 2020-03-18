<?php
    require_once 'vendor/autoload.php';
    
    session_start();

    $tituloAtividade = $_POST['tituloAtividade'];
    $descricaoAtividade = $_POST['descricaoAtividade'];
    $dataRecebimentoAtividade = $_POST['dataRecebimentoAtividade'];
    $dataEntregaAtividade = $_POST['dataEntregaAtividade'];
    $prioridadeAtividade = $_POST['prioridadeAtividade'];
    $idPessoa = $_SESSION['idUsuario'];


    $atividade = new App\Classes\Atividades($tituloAtividade, $descricaoAtividade, $dataEntregaAtividade, $dataRecebimentoAtividade, $prioridadeAtividade, $idPessoa);
    $atividadeDao = new App\ClassesDAO\atividadeDAO();

    $atividadeDao->createAtividade($atividade);
    header("location:../codigosHTMl/atividadesPlana.php");
?>
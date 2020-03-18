<?php
    require_once 'vendor/autoload.php';
    
    session_start();

    $nomeConta = $_POST['nomeConta'];
    $sobrenomeConta = $_POST['sobrenomeConta'];
    $emailConta = $_POST['emailConta'];
    $senhaConta = $_POST['senhaConta'];

    $pessoa = new App\Classes\Pessoa($nomeConta, $sobrenomeConta, $emailConta, $senhaConta);
    $pessoaDao = new App\ClassesDAO\pessoaDAO();

    $pessoaDao->updatePessoa($pessoa, $_SESSION['idUsuario']);
    $_SESSION['atualizou'] = true;
    header("location:../codigosHTMl/contaPlana.php");
?>
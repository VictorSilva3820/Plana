<?php
    require_once 'vendor/autoload.php';
    
    session_start();

    $nomeUsuario = $_POST['nomeCadastro'];
    $sobrenomeUsuario = $_POST['sobrenomeCadastro'];
    $emailUsuario = $_POST['emailCadastro'];
    $senhaUsuario = $_POST['senhaCadastro'];

    $pessoa = new App\Classes\Pessoa($nomeUsuario, $sobrenomeUsuario, $emailUsuario, $senhaUsuario);
    $pessoaDao = new App\ClassesDAO\pessoaDAO();

    $pessoaDao->createPessoa($pessoa);
    $_SESSION['cadastrou'] = true;
    header("location:../codigosHTMl/cadastroPlana.php");

    
?>
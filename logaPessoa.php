<?php
    require_once 'vendor/autoload.php';
    
    session_start();

    $emailUsuario = $_POST['emailLogin'];
    $senhaUsuario = $_POST['senhaLogin'];

    $pessoaDao = new App\ClassesDAO\pessoaDAO();

    echo $emailUsuario;

    if($pessoaDao->logarPessoa($emailUsuario, $senhaUsuario)){
        header("location:../codigosHTMl/homePlana.php");
    }else{
        header('location:../codigosHTMl/cadastroPlana.php');
    };

?>
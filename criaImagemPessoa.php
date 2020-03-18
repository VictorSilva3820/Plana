<?php 
    require_once 'vendor/autoload.php';
    
    session_start();

    if(isset($_FILES['imgConta'])){
        $extensao = strtolower(substr($_FILES['imgConta']['name'], -4));
        $newName = time() . $extensao;
        $diretorio = "../codigosCSS/upload/";

        move_uploaded_file($_FILES['imgConta']['tmp_name'], $diretorio.$newName);
        $pessoaDao = new App\ClassesDAO\pessoaDAO();
        $pessoaDao->updatePessoaImg($newName, $_SESSION['idUsuario']);
        header("location:../codigosHTMl/contaPlana.php");
    }else{
        echo "error";
    }
?>
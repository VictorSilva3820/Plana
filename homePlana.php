<?php 
    include_once "..\codigosPHP\includes\headInc.html";
    include_once "..\codigosPHP\dadosPessoa.php";
    
    if(!isset($_SESSION['idUsuario'])){
        header("location:cadastroPlana.php");
    }
?>
    <section class="telaInicial">
        <div class=bannerPrincipal>
            <div class="textos">
                <h2>Olá,</h2>
                <h1><?php
                    if(isset($_SESSION['idUsuario'])){
                        echo ($pessoaDAO->getNomePessoa($_SESSION['idUsuario']));
                    }
                ?></h1>
            </div>
            <div class="imgInicial"></div>
        </div>
        <a href="#explorar" class="botaoExplorar">Explorar</a>
    </section>
    <section class="explorar" id="explorar">
        <h1>Organize-se, planeje!</h1>
        <div class="cardsMenu">
            <div class="card-atividade">
                <div class="img"></div>
                <h1><a href="atividadesPlana.php">Atividades</a></h1>
            </div>
            <div class="card-calendario">
                <div class="img"></div>
                <h1><a href="calendarioPlana.php">Calendario</a></h1>
            </div>
            <div class="card-conta">
                <div class="img"></div>
                <h1><a href="contaPlana.php">Conta</a></h1>
            </div>
        </div>
    </section>
    <section class="quemSomos">
        <div class="imgQuem"></div>
        <article>
            <h1>Quem somos?</h1>
            <p>Criado em 2015, o Plana faz parte da organização de vida de muitas pessoas à quase 5 anos, o que nos faz sermos uma as principais plataformas da atualidade.
            Contamos com uma equipe especializada e que busca oferecer a melhor experiência possível aos nossos preciosos usuários.
            O Plana tem como seu principal propósito o suporte na organização das atividades e do tempo dos usuários. Nossa plataforma foi criada e pensada para todos os tipos de pessoas, de diferentes idades e diferentes responsabilidades.
            Planejamos uma expansão dos serviços de nossa plataforma para que ela consiga alcançar um maior número de pessoas, assim todas tendo acesso ao nosso suporte.
            Carregamos conosco valores essências na fundação de uma empresa: Responsabilidade, Comunidade, Respeito, Segurança, Foco e Compromisso. Assim buscamos que o Plana se torne uma imensa e virtuosa plataforma.
            </p>
        </article>
    </section>
<?php 
    include_once "../codigosPHP/includes/footerInc.html";
?>
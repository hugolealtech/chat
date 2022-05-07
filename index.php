<?php
    session_start();
    if (! isset($_SESSION['logado'])) {
        $_SESSION['logado']         = false;
        $_SESSION['tema']           = 'comum';
        $_SESSION['usuario']        ='';
        $_SESSION['nome']           ='';
        $_SESSION['cor_nome_texto'] = '#000';
        $_SESSION['cor_nome_fundo'] ='#fff';
        
    }

    if (isset($_POST['acao'])){
        
    }

?>

<!DOCTYPE html>

<HTML>


    <HEAD>
        <title>Chat IESB</title>
        <script src="script_head.js"></script>
        <link rel="StyleSheet" href="estilo.css"/>
        <link rel="stylesheet" href="tema_<?=$_SESSION['tema']?>.css"/>
    </HEAD>



    <body>
       

        <div class="tela_login">
            <?php

                if ($_SESSION['logado']){

            ?>
                    <div class="logado">
                        <span class="informacao">

                            <span class="nome">Logado como:</span>
                            <span class="valor"><?=$_SESSION['usuario']?></span>

                        </span>
                        <span class="informacao">

                            Seja Bem-vindo <span class="valor"><?=$_SESSION['nome']?></span>!

                            

                        </span>    

                        <form method="POST">
                            <input type="hidden" name="acao" value="deslogar"/>
                            <input type="submit" value="Deslogar"/>
                        </form>    

                    </div>
                    <?php
                }else{
                    ?>
                    <div class="deslogado">
                        <span class="informacao">

                           Você não está logado. Entre com suas informações abaixo.

                        </span>
                        
                        <form method="POST">
                            <input type="hidden" name="acao" value="logar"/>

                            <span class="informacao">
                                <span class="nome">Nome de usuário</span>
                                <input name="usuario"/>
                            </span>

                            <span class="informacao">
                                <span class="nome">Senha</span>
                                <input name="senha" type="password"/>
                            </span>

                            <input class="botao_logar" type="submit" value="Logar"/>

                        </form>

                    </div>

                    <?php
                }
                    ?>

            
        </div>

        <div class="tela_mensagem">
        </div>

        <div class="tela_usuarios">
        </div>

        <div class="tela_chat">
        </div>
       
    
    <script src="script_body.js"></script>    
</body>

</html>


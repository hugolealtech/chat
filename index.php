<?php
    session_start();
    if (! isset($_SESSION['logado'])) {
        $_SESSION['logado']         = false;
        $_SESSION['tema']           = 'comum';
        $_SESSION['usuario']        ='';
        $_SESSION['nome']           ='';
        $_SESSION['cor_nome_texto'] = '#000';
        $_SESSION['cor_nome_fundo'] ='#fff';
        $_SESSION['msg']            ='';
        
    }

    if (isset($_POST['acao'])){
        switch ($_POST['acao']){
            case "logar":
                $_SESSION['logado']  = true;
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['nome']    = '';
                $_SESSION['msg']     =' Logado com Sucesso! ';
                break;
            case "deslogar":
                $_SESSION['logado']  = false;
                $_SESSION['usuario'] = '';
                $_SESSION['nome']    = '';
                $_SESSION['msg']     =' DesLogado com Sucesso! ';
                break;

        }
        Header('Location: .');

    }

?>

<!DOCTYPE html>

<HTML>


    <HEAD>
        <title>Chat IESB </title>
        <script src="script_head.js"></script>
        <link rel="StyleSheet" href="estilo.css"/>
        <link rel="stylesheet" href="tema_<?=$_SESSION['tema']?>.css"/>
        <?php 
                if ($_SESSION['msg'] != ''){
        ?>
            <script> alert('<?=$_SESSION['msg'];?>');</script>
        <?php
           
       } 
       ?>
       
    </HEAD>

    <body>   
       

        <div class="tela_login">
            <?php

                if ($_SESSION['logado']){

                    ?>
                    
                        <span class="informacao">

                            <span class="nome">Logado como:</span>
                            <span class="valor"><?=$_SESSION['usuario']?></span>

                        </span>
                        <span class="informacao">

                            Seja Bem-vindo! <span class="valor"><?=$_SESSION['nome']?></span>

                            

                        </span>    

                        <form method="POST">
                            <input type="hidden" name="acao" value="deslogar"/>
                            <input type="submit" value="Deslogar"/>
                        </form>    

                    
                    <?php
                }else{
                    ?>
                    <span class="informacao">

                        Você não está logado. Entre com suas informações abaixo.

                        </span>
                        
                        <form method="POST">
                            <input type="hidden" name="acao" value="logar"/>

                            <span class="informacao">
                                <span class="nome">Nome de usuário</span>
                                <input class="valor" name="usuario"/>
                            </span>

                            <span class="informacao">
                                <span class="nome">Senha</span>
                                <input class="valor" name="senha" type="password"/>
                            </span>

                            <input class="botao_logar" type="submit" value="Logar"/>

                        </form>

                    <?php
                }
                    ?>

            
        </div>

        <div class="tela_mensagem">
            <?php if($_SESSION['logado']) { ?>

                <div class="informacao"> Digite abaixo sua mensagem:

                </div>

                    <form onsubmit="return false;">
                        <input id="msg_enviar" class="mensagem" />
                            <input type="submit" value="Enviar"/>

                        </input>
                    </form>
            
                <?php } else {?>

                
                <?php } ?>               

            
        </div>

        <div id="tela_usuarios" class="tela_usuarios">
            <!--
                <div class "usuario">
                    <div class="nome">$NOME</div>
                    <div class="login">$LOGIN</div>
                    <div class="online">$ONLINE</div>
                </div>
                -->

        </div>

        <div class="tela_chat">
        </div>
    
    
        <script src="script_body.js"></script>    
    </body>

</html>


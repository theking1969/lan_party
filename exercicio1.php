<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: inicial.php");
}
$valorInserido='';
$valorFormatado='';
$message="";
$NumeroMaior="";
$NumeroMenor="";
    if (isset( $_POST ['submit'])){
        if(Empty($_POST['caixaUtilizador'])){
            $messageCaixa1="Caixa vazia";
        }
        else{
            $valorInserido= $_POST['caixaUtilizador'];
            $caracLength = strlen($valorInserido);
            if($caracLength==10){
                $numeros = str_split($valorInserido);
                $valorFormatado = implode(",",$numeros); 
                $NumeroMaior=(max($numeros)); 
                $NumeroMenor=(min($numeros));
            }
            else{
                $message="Por favor tem que ter 10 números";
            }
        }  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Closed_Book_Icon.svg.png">
    <link rel="stylesheet" href="estilos/styleExercicio3.css">
    <title>Exercicio 1</title>
</head>
<body>
    <header class="cabecalho">   
                <img src="images/Closed_Book_Icon.svg.png"  alt="" width="3%" height="8%">
                <nav class="cabecalho-menu" >
                    <a href="inicial.php" class="cabecalho-menu-item">Inicio</a>
                    <a href="listaExercicios.php" class="cabecalho-menu-item">Exercicios</a>
                    <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>
                </nav>
    </header>

    <main class="fundo-form">
        <form method="post" class="fundo">

            <h2>Escreva 10 números</h2>

                <span class="error" style="color: #FF0000;"><?php echo $message;?></span>
                <p>Insira 10 números</p>
                
                <input type="text" maxlength="10" name="caixaUtilizador" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value=" <?php echo $valorFormatado;?>"/>
                <p>O maior número</p>
                <input type="text" name="name" class="caixa2" disabled value=" <?= $NumeroMaior; ?>"/>
                <p>O menor número</p>
                <input type="text" name="name" class="caixa2" disabled value=" <?= $NumeroMenor; ?>"/>

            <button class="butao"type="submit" name="submit" id="submit">Gerar</button>  
        </form>
    </main>
    <footer>
            <section class="rodape-conteudo">
                <h2 style="padding-bottom: 2px; font-family: 'Cabin', sans-serif;line-height: 61px;color:white;">Redes Socias</h2>               
                    <section class="sec-img">
                         <img src="images\1164349_circle_instagram_logo_media_network_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296499_fb_facebook_facebook logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296515_bird_tweet_twitter_twitter logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296504_forum_reddit_reddit logo_icon.svg" alt="" width="4%" height="8%">
                    </section>                        
            </section>        
    </footer>
</body>
</html>
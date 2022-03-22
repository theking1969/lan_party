<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: inicial.php");
}
 $randomString = '';
    function generateRandomString($length = 8) {
       
        $carac = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&?|!-+';
        $caracLength = strlen($carac);
        $randomString = '';
        $randomString = substr(str_shuffle($carac),0,8);
        return $randomString;
    }    
    if (isset( $_POST ['submit'])) {
        $randomString=generateRandomString();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Closed_Book_Icon.svg.png">
    <link rel="stylesheet" href="estilos/styleExercicio.css">
    <title>Exercicio 2</title>
</head>
<body>
    <header class="cabecalho">   
                <img src="images/Closed_Book_Icon.svg.png"  alt="" width="3%" height="8%">
                <nav class="cabecalho-menu" >
                    <a href="inicial.php" class="cabecalho-menu-item">Início</a>
                    <a href="listaExercicios.php" class="cabecalho-menu-item">Exercícios</a>
                    <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>
                </nav>
    </header>

    <main class="fundo-form">
        <form method="post" class="fundo">
            <h1>Gerar uma senha</h1>
            <input id= "IDname" type="text" name="name" class="caixa2" value=" <?= $randomString; ?>" />
            <button class="butao"type="submit" name="submit" id="submit">Gerar</button>  
        </form>
    </main>
    <footer>
            <section class="rodape-conteudo">
                <h2 style="padding-bottom: 2px; font-family: 'Cabin', sans-serif;line-height: 61px;color:white;">Redes Sociais</h2>               
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
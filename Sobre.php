<?php
session_start();

if (isset( $_POST ['submit2'])) {
    header("Location: exercicio2.php");
}
if (isset( $_POST ['submit3'])) {
    header("Location: exercicio3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/styleExercicios.css">
    <link rel="icon" href="images/Closed_Book_Icon.svg.png">
    <title>About</title>
    
</head>
<body>
    <header class="cabecalho">
        <img  id="img"src="images/Closed_Book_Icon.svg.png"  alt="" width="3%" height="8%">
        
        <nav class="cabecalho-menu">
            <a href="inicial.php" class="cabecalho-menu-item">Inscrições</a>
            <a href="" class="cabecalho-menu-item">Sobre o projeto</a>
            <a href="sair.php" class="cabecalho-menu-item">Sair</a>
        </nav>
    </header>
    <section id="sec-titulo">
        <div class="break"></div>
        <h1 id="titulo">LAN Party CS:GO</h1>
    </section>
    <main>
        
    </main>
    <br>
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
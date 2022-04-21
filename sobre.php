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
    <link rel="stylesheet" href="estilos/styleIncial.css">
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
        <div class="conteudo-principal-escrito">

        <div style="margin-top: 2%;width:642px;height:448px;">
                <div>
                    <div>
                    <img src="images/csgo.png" class="d-block w-100" alt="..."style="height: 385px;width: 309px;">
                    </div>
                </div>
            </div>
        <h1 style="text-align: center;"class="conteudo-principal-escrito-titulo">Sobre este projeto.</h1>
     <h2 class="conteudo-principal-escrito-subtitulo">Este projeto irá decorrer no dia 5 de maio ás 9:30, na sala 1, com 14 PC's disponiveis para quem não conseguir trazer o seu própio setup. (Projeto formado pela PSI5, Torneio CS:GO)</h2>
     <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Regras</h1>
     <h2 class="conteudo-principal-escrito-subtitulo">Não gritar durante os jogos. <br>Não utilizar línguagem ofensíva. <br>Não ofender Adversários. <br>Não estragar o material escolar. <br>Não ter conduta anti-gaming (Flame, Toxicidade, Intentional feed, Hacks/Cheats) </h2>
     <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Funcionamento do torneio</h1>
     <h2 class="conteudo-principal-escrito-subtitulo">Os participantes podem inscrever-se na aba <a href="index.php">"Inscrições"</a> e inscreverer uma equipa (5 Participantes), ou simplesmente 1 participante poderá participar, mas será-lhe atribuida uma equipa de outros participantes sem equipa, caso não haja participantes suficientes sem equipa o participante não poderá jogar no torneio. <br> Podem trazer os vossos periféricos (Rato e teclado). <br><br> <strong style="text-align: center;">TODOS OS PARTICIPANTES DA EQUIPA QUE FICAR EM 1º LUGAR VÃO TER UM PRÉMIO!</strong> </h2>


        </div>
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
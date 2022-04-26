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

<header class="cabecalho">
    <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
    <nav class="cabecalho-menu" >
    <a href="index.php" class="cabecalho-menu-item">Lan Party</a>
    <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
    <a href="inscrever.php" class="cabecalho-menu-item">Inscrições</a>
    </nav>
</header>
<section id="sec-titulo">
    <div class="break"></div>
    <h1 id="titulo" style="text-align: center; font-size: 3rem; color: white;">LAN Party CS:GO</h1>
</section>
<main>
    <div class="conteudo-principal-escrito">

        <div style="margin-top: 2%;width:642px;height:448px;">
            <div>
                <div>
                    <img src="images/csgo.png" class="d-block w-100" alt="..."style="height: 100%;width: 100%;">
                </div>
            </div>
        </div>
        <h1 style="text-align: center;"class="conteudo-principal-escrito-titulo">Sobre este projeto.</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Este projeto irá decorrer no dia 5 de maio ás 9:30, na sala 1, com 14 PC's disponiveis para quem não conseguir trazer o seu própio setup. (Projeto formado pela PSI5, Torneio CS:GO)</h2>
        <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Regras</h1>
            <ul class="conteudo-principal-escrito-subtitulo">
                    <li>Não gritar durante os jogos.</li>
                    <li>Não utilizar línguagem ofensíva.</li>
                    <li>Não ofender Adversários.</li>
                    <li>Não estragar o material escolar.</li>
                    <li>Não ter conduta anti-gaming (Flame, Toxicidade, Intentional feed, Hacks/Cheats)</li>
                </ul>
            </h2>
            <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Funcionamento do torneio</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Os participantes podem inscrever-se na aba <a href="index.php">"Inscrições"</a> e inscreverer uma equipa (5 Participantes), ou simplesmente 1 participante poderá participar, mas será-lhe atribuida uma equipa de outros participantes sem equipa, caso não haja participantes suficientes sem equipa o participante não poderá jogar no torneio. <br> Podem trazer os vossos periféricos (Rato e teclado). <br><br> <strong style="text-align: center;">TODOS OS PARTICIPANTES DA EQUIPA QUE FICAR EM 1º LUGAR VÃO TER UM PRÉMIO!</strong> </h2>


    </div>
</main>

<footer>         
    
    <section class="rodape-conteudo">
                    
            <section class="sec-img">
               
                 <img src="images\1164349_circle_instagram_logo_media_network_icon.svg" alt="" width="13%" height="10%"> <h5 style="color:#FFFFFF">@lanparty_psi5</h5>
                 <br>
            </section>                        
    </section>         
</footer>
<br><br>
</head>
</html>
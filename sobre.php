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
    <title>Sobre o Projeto</title>
</head>

<header class="cabecalho">
    <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
    <nav class="cabecalho-menu" >
    <a href="index.php" class="cabecalho-menu-item">Lan Party</a>
    <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
    </nav>
</header>
<section id="sec-titulo">
    <div class="break"></div>
    <h1 id="titulo" style="text-align: center; font-size: 3rem; color: white; margin-top: 5%;">LAN Party CS:GO</h1>
</section>
<main>
    <div class="conteudo-principal-escrito">

        <div style="margin-top: 2%;width:100%;height:100%; ">
            <div>
                <div>
                    <img src="images/csgo.png" class="d-block w-100" alt="..."style="height: 100%;width: 100%;">
                </div>
            </div>
        </div>
        <h1 style="text-align: center;"class="conteudo-principal-escrito-titulo">Sobre este projeto.</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Este projeto decorrerá no dia 4 de maio ás 9:30, na sala 1, com 14 PC's disponíveis. Este é o projeto integrador da PSI5, em que este mesmo se baseia num Torneio CS:GO em LAN)</h2>
        <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Regras</h1>
            <ul class="conteudo-principal-escrito-subtitulo">
                    <li>Proibido gritar durante os jogos.</li>
                    <li>Proibido a utilização de línguagem ofensíva.</li>
                    <li>Proibido ofender Adversários.</li>
                    <li>Proibido danificar o material escolar.</li>
                    <li>Proibido qualquer uso de programas de auxílio no jogo (Hacks, Cheats).</li>
                    <li>Proibido fotos e nomes ofensivos, de conteúdo abusivo ou sensível.</li>
                    <li>Proibido a utilização de Nicknames e Nomes iguais.</li>
                    <li>Proibido conduta anti-gaming (Flame, Toxicidade, Team Tagging)</li>
                    <li>Proibido ir para espectador ou mudar de equipa para obter qualquer tipo de informação sobre posição ou vida de outros jogadores.</li>
                </ul>
            </h2>
            <h1 style="text-align: center;" class="conteudo-principal-escrito-titulo">Funcionamento do torneio</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Os participantes podem inscrever-se na aba <a href="index.php" style="text-decoration: underline; color: white;">Inscrições</a> e inscrever uma equipa (5 Participantes), ou inscrever 1 participante, o qual será lhe atribuida uma equipa de outros participantes individuais, caso não haja participantes suficientes individuais para formar uma equipa, o participante não poderá jogar no torneio. <br> Podem trazer os vossos periféricos (Rato, Teclado e Headsets). <br><br> <strong style="text-align: center;">TODOS OS PARTICIPANTES DA EQUIPA QUE FICAR EM 1º LUGAR TERAM UM PRÉMIO!</strong> </h2>


    </div>
</main>

<br><br>
</head>
</html>

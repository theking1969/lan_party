<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/styleregisto.css">
    <link rel="icon" href="images/icon_landingpage.png">
    <title>inscrever</title>
</head>

<body>
<header class="cabecalho">
    <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
    <nav class="cabecalho-menu" >
        <a href="index.php" class="cabecalho-menu-item">Início</a>
        <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
        <a href="inscrever.php" class="cabecalho-menu-item">Inscrições</a>

    </nav>
</header>
<section id="sec-titulo">
    <div class="break"></div>
    <h1 id="titulo">Inscreve-te!</h1>
</section>
<main>
    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            <form action="inscrever.php" class="form-escrever" method="post" style="height: 20%;">
                <h2 class="form-titulo">Inscrição</h2>
                <input type="text" class="txtNome" placeholder="Nome" required name="nome">
                <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno">
                <input type="text" class="txtEmail" placeholder="E-mail" required name="email">
                <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam">
                <select name="equipa" id="equipasCombo">
                    <option value="">Escolha a equipa</option>
                    <option value="1">Equipa 1</option>
                    <option value="2">Equipa 2</option>
                    <option value="3">Equipa 3</option>
                    <option value="4">Equipa 4</option>
                    <option value="5">Equipa 5</option>
                </select>
                <button class="botao" style="margin-bottom: 3%;" name="botao">Inscrever</button>
            </form>
        </div>

        <div class="div-img" style="margin-top: 2%;width:642px;height:448px;">
            <img src="images/Gaming-bro.svg" class="d-block w-100" alt="..."style="width:642px;height:448px;">
        </div>
    </section>
</main>

</body>
</html>

<?php

function inserirjogadores(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdlan_party";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $nome = $_POST['nome'];
    $numeroAluno = $_POST['numaluno'];
    $email = $_POST['email'];
    $steamID = $_POST['idsteam'];

    // $sqlSelect = "SELECT ID_Equipa FORM Equipas WHERE Nome_Equipa = $equipa";
    // $getRes = $conn->prepare($sqlSelect);
    // $getRes->execute();
    //
    // while($row = $getRes->fetch(PDO::FETCH_ASSOC)){
    //     $equipaID = $row['ID_Equipa'];
    // }
if ($_POST['equipa'] == "Escolha a equipa") {
  echo "É necessario inserir a equipa que quer entrar!";
}
elseif ($_POST['equipa'] == "Equipa 1") {
  $sqlSelect = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa)". " VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , 1)";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
}
elseif ($_POST['equipa'] == "Equipa 2") {
  $sqlSelect = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa)". " VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , 2)";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
}
elseif ($_POST['equipa'] == "Equipa 3") {
  $sqlSelect = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa)". " VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , 3)";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
}
elseif ($_POST['equipa'] == "Equipa 4") {
  $sqlSelect = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa)". " VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , 4)";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
}
elseif ($_POST['equipa'] == "Equipa 5") {
  $sqlSelect = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa)". " VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , 4)";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
}

}

function verificationEmail(){

    $conn->close();
}

if(isset($_POST['botao'])) {
    inserirjogadores();

}

if (isset($_POST['Equipa'])){

}
?>
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
    <link rel="stylesheet" href="estilos/styleregisto.css">
    <link rel="icon" href="images/icon_landingpage.png">
    <title>Inscrever</title>
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
        <h1 id="titulo">Inscreve a tua equipa!</h1>
    </section>
    <main>
         <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <form action="inscrever.php" class="form-escrever" style="height: 20%;">
                <div class="nomeEquipa"><h2 class="form-titulo">Nome da equipa</h2><input type="text" class="txtNome" placeholder="Nome da equipa" required name="NomeEquipa"></div>
                    <div class="jogadoresInscricao">
                        <h2 class="form-titulo">Inscrição Jogador Um</h2>
                        <div class="jogador">
                            <input type="text" class="txtNome" placeholder="Nome" required name="nome1">
                            <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno1">
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="email1">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam1">
                        </div>
                        <h2 class="form-titulo">Inscrição Jogador Dois</h2>
                        <div class="jogador">
                            <input type="text" class="txtNome" placeholder="Nome" required name="nome2">
                            <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno2">
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="email2">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam2">
                        </div>
                        <h2 class="form-titulo">Inscrição Jogador Três</h2>
                        <div class="jogador">
                            <input type="text" class="txtNome" placeholder="Nome" required name="nome3">
                            <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno3">
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="email3">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam3">
                        </div>
                        <h2 class="form-titulo">Inscrição Jogador Quatro</h2>
                        <div class="jogador">
                            <input type="text" class="txtNome" placeholder="Nome" required name="nome4">
                            <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno4">
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="email4">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam4">
                        </div>
                        <h2 class="form-titulo">Inscrição Jogador Cinco</h2>
                        <div class="jogador">
                            <input type="text" class="txtNome" placeholder="Nome" required name="nome5">
                            <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno5">
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="emai5">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam5">
                        </div>
                    </div>
                    <button class="botao" name="botao" style="margin-bottom: 3%; ">Inscrever</button>
                </form>
            </div>
        </section>
    </main>
    <br><br>
</body>
</html>

<?php
function inscrever(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bd_lanparty";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $nome = $_POST['nome'];
  $numeroAluno = $_POST['numaluno'];
  $email = $_POST['email'];
  $steamID = $_POST['idsteam'];
  $equipa = $_POST['NomeEquipa'];

  $sqlEquipas = "INSERT INTO equipas (Nome_Equipa, Estado_equipa) VALUES ('$equipa', 1)";
  $getRes = $conn->prepare($sqlEquipas);
  $getRes->execute();

  $sqlSelect = "SELECT ID_Equipa FROM equipas WHERE Nome_Equipa = $equipa";
  $getRes = $conn->prepare($sqlSelect);
  $getRes->execute();
  while($row = $getRes->fetch(PDO::FETCH_ASSOC)){
      $equipaID = $row['ID_Equipa'];
  }

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome1', '$numeroAluno1', '$email1', '$steamID1', 1 , '$equipaID')";
  $getRes = $conn->prepare($sql);
  $getRes->execute();

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome2', '$numeroAluno2', '$email2', '$steamID2', 1 , '$equipaID')";
  $getRes = $conn->prepare($sql);
  $getRes->execute();

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome3', '$numeroAluno3', '$email3', '$steamID3', 1 , '$equipaID')";
  $getRes = $conn->prepare($sql);
  $getRes->execute();

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome4', '$numeroAluno4', '$email4', '$steamID4', 1 , '$equipaID')";
  $getRes = $conn->prepare($sql);
  $getRes->execute();

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome5', '$numeroAluno5', '$email5', '$steamID5', 1 , '$equipaID')";
  $getRes = $conn->prepare($sql);
  $getRes->execute();
}


if(isset($_POST['botao'])) {
    inscrever();
}


?>

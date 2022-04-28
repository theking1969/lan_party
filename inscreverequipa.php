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
    <title>Inscrições - Equipas</title>
</head>

<body>
        <header class="cabecalho">
            <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
            <nav class="cabecalho-menu" >
            <a href="index.php" class="cabecalho-menu-item">Lan Party</a>
    <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>

            </nav>
        </header>
        <main>
        <h1 id="titulo">Inscreve a tua equipa!</h1>
         <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <form class="form-escrever" method="post" style="height: 20%;">
                <div class="nomeEquipa"><h2 class="form-titulo">Nome da equipa</h2>
                  <input type="text" class="txtNome" placeholder="Nome da equipa" required name="NomeEquipa"></div>

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
                            <input type="text" class="txtEmail" placeholder="E-mail" required name="email5">
                            <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam5">
                        </div>
                    </div>
                    <button class="botao" name="botao" style="margin-bottom: 3%; ">Inscrever</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php
function insertequipa(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bd_lanparty";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $equipa = $_POST['NomeEquipa'];

  $sqlEquipas = "INSERT INTO equipas (Nome_Equipa, Estado_equipa) VALUES ('$equipa', 1)";
  $getRes = $conn->prepare($sqlEquipas);
  $getRes->execute();
}



function insertplayers($equipaID){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bd_lanparty";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $nome1 = $_POST['nome1'];
  $numeroAluno1 = $_POST['numaluno1'];
  $email1 = $_POST['email1'];
  $steamID1 = $_POST['idsteam1'];

  $nome2= $_POST['nome2'];
  $numeroAluno2 = $_POST['numaluno2'];
  $email2 = $_POST['email2'];
  $steamID2 = $_POST['idsteam2'];

  $nome3 = $_POST['nome3'];
  $numeroAluno3 = $_POST['numaluno3'];
  $email3 = $_POST['email3'];
  $steamID3 = $_POST['idsteam3'];

  $nome4 = $_POST['nome4'];
  $numeroAluno4 = $_POST['numaluno4'];
  $email4 = $_POST['email4'];
  $steamID4 = $_POST['idsteam4'];

  $nome5 = $_POST['nome5'];
  $numeroAluno5 = $_POST['numaluno5'];
  $email5 = $_POST['email5'];
  $steamID5 = $_POST['idsteam5'];

  if (isset($equipaID)) {
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
}






function inscrever(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bd_lanparty";

  $conn = new mysqli($servername, $username, $password, $dbname);

  insertequipa();

$equipa = $_POST['NomeEquipa'];
  //echo $equipa;
  $sql = "SELECT ID_Equipa FROM equipas where Nome_Equipa = '$equipa'"; //output é sempre 1 ERRO
  // $getRes = $conn->prepare($sqlSelect);
  //$equipaID = $getRes->execute();
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $equipaID = $row["ID_Equipa"];
    echo "id: " . $row["ID_Equipa"];
  }
} else {
  echo "0 results";
}

  insertplayers($equipaID);
}


if(isset($_POST['botao'])) {
    inscrever();
    echo '<script>alert("Voçês inscreveram-se!")</script>';
}


?>

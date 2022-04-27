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
    <title>Inscrições - Individuais</title>

</head>

<body>
<header class="cabecalho">
    <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
    <nav class="cabecalho-menu" >
    <a href="index.php" class="cabecalho-menu-item">Lan Party</a>
    <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>

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
                    <option selected disabled value="Escolha a equipa">Escolha a equipa</option>
                    <option  value="Equipa 1">Equipa 1</option>
                    <option  value="Equipa 2">Equipa 2</option>
                    <option  value="Equipa 3">Equipa 3</option>
                    <option  value="Equipa 4">Equipa 4</option>
                    <option  value="Equipa 5">Equipa 5</option>
                    <?php
                    // $sqlSelect = "SELECT Nome_Equipa FROM equipas GROUP BY Nome_Equipa HAVING COUNT(*) < 5;";
                    //  $getRes = $conn->prepare($sqlSelect);
                    //  $getRes->execute();
                    //  while($row = $getRes->fetch(PDO::FETCH_ASSOC)){
                    //   echo '<option>' . $row['Nome_Equipa'] . '</option>';
                    //  }
                     ?>
                </select>
                <button class="botao" style="margin-bottom: 3%;" name="botao">Inscrever</button>
            </form>
        </div>

        <div class="div-img" style="margin-top: 2%;width:642px;height:448px;">
            <img src="images/Gaming-bro.svg" class="d-block w-100" alt="..."style="width:642px;height:448px;">
        </div>
    </section>

<br><br>
</main>

</body>
</html>

<?php
function insert($equipa){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bd_lanparty";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $nome = $_POST['nome'];
  $numeroAluno = $_POST['numaluno'];
  $email = $_POST['email'];
  $steamID = $_POST['idsteam'];

  $sql = "INSERT INTO jogadores(Nome_jogadores, NumESCO, Email, Steam_ID, ID_estadoJogador, ID_equipa) VALUES('$nome', '$numeroAluno', '$email', '$steamID', 2 , $equipa)";
  $getRes = $conn->prepare($sql);
  $getRes->execute();
}

function verificarEquipa(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdlan_party";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $nome = $_POST['nome'];
    $numeroAluno = $_POST['numaluno'];
    $email = $_POST['email'];
    $steamID = $_POST['idsteam'];
}

function inserirjogadores(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_lanparty";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $nome = $_POST['nome'];
    $numeroAluno = $_POST['numaluno'];
    $email = $_POST['email'];
    $steamID = $_POST['idsteam'];

if ($_POST['equipa'] == "Escolha a equipa") {
  echo "É necessario inserir a equipa que quer entrar!";
}
elseif ($_POST['equipa'] == "Equipa 1") {
  $sql = "SELECT * FROM `jogadores` WHERE ID_equipa = 1";
  $result = $conn->query($sql);
  if ($result->num_rows < 5) {
  insert(1);
} else {
  echo '<script>alert("A Equipa 1 já está cheia!")</script>';
}
  //$getRes = $conn->prepare($sqlSelect);
  //$i = $getRes->execute();
}
elseif ($_POST['equipa'] == "Equipa 2") {
  $sql = "SELECT * FROM `jogadores` WHERE ID_equipa = 2";
  $result = $conn->query($sql);
  if ($result->num_rows < 5) {
  insert(2);
} else {
  echo '<script>alert("A Equipa 2 já está cheia!")</script>';
}

}
elseif ($_POST['equipa'] == "Equipa 3") {
  $sql = "SELECT * FROM `jogadores` WHERE ID_equipa = 3";
  $result = $conn->query($sql);
  if ($result->num_rows < 5) {
  insert(3);
} else {
  echo '<script>alert("A Equipa 3 já está cheia!")</script>';
}
}
elseif ($_POST['equipa'] == "Equipa 4") {
  $sql = "SELECT * FROM `jogadores` WHERE ID_equipa = 4";
  $result = $conn->query($sql);
  if ($result->num_rows < 5) {
  insert(4);
} else {
  echo '<script>alert("A Equipa 4 já está cheia!")</script>';
}
}
elseif ($_POST['equipa'] == "Equipa 5") {
  $sql = "SELECT * FROM `jogadores` WHERE ID_equipa = 5";
  $result = $conn->query($sql);
  if ($result->num_rows < 5) {
  insert(5);
} else {
  echo '<script>alert("A Equipa 5 já está cheia!")</script>';
}
}

}

if(isset($_POST['botao'])) {
    inserirjogadores();
}
?>

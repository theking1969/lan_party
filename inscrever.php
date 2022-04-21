<?php
session_start();
include 'config.php';
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
                <form action="inscrever.php" class="form-escrever" style="height: 20%;">
                    <h2 class="form-titulo">Inscrição</h2>
                    <input type="text" class="txtNome" placeholder="Nome" required name="nome">
                    <input type="text" class="txtNumeroAluno" placeholder="Nºaluno" required name="numaluno">
                    <input type="text" class="txtEmail" placeholder="E-mail" required name="email">
                    <input type="text" class="txtSteam" placeholder="ID Steam" required name="idsteam">
                    <button class="botao" style="margin-bottom: 3%;">Inscrever</button>
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
//function verificationEmail(){
//// const APP_URL = 'http://localhost/auth'; //por resolver
//    // create the activation link
//    $activation_link = APP_URL . "/activate.php?email=$email&activation_code=$activation_code"; //por resolver
//
//    // set email subject & body
//    $subject = 'Confirme a sua conta';
//    $message = <<<MESSAGE
//            Ative a sua conta aqui ->
//            $activation_link
//            MESSAGE;
//    // email header
//    $header = "From:" . $_POST['email'];
//
//    // send the email
//    mail($_POST['email'], $subject, nl2br($message), $header);
//
//}

function inserirjogadores(){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "lan_party";

    $conn = new mysql($servername, $username, $password, $dbname);
    $nome = $_POST['txtNome'];
    $numeroAluno = $_POST['txtNumeroAluno'];
    $email = $_POST['txtEmail'];
    $steamID = $_POST['txtSteam'];
    $equipa = $_POST['txtEquipa'];

    $sqlSelect = "SELECT ID_Equipa FORM Equipas WHERE Nome_Equipa = $equipa";
    $getRes = $conn->prepare($sqlSelect);
    $getRes->execute();

    while($row = $getRes->fetch(PDO::FETCH_ASSOC)){
        $equipaID = $row['ID_Equipa'];
    }


    $sql = "INSERT INTO jogadores (Nome_jogadores, NumEsco, Email, Steam_ID, ID_Equipa) VALUES ($nome, $numeroAluno, $email, $steamID, $equipaID)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

if(isset($_POST['botao'])) {
    //verificationEmail();

}

if (isset($_POST['Equipa'])){

}

?>

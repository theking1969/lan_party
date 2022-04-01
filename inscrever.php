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
    <link rel="icon" href="images/Closed_Book_Icon.svg.png">
    <title>inscrever</title>
</head>

<body>
        <header class="cabecalho">
            <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
            <nav class="cabecalho-menu" >
                <a href="index.php" class="cabecalho-menu-item">Início</a>
                <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
                <a href="inscrever.php" class="cabecalho-menu-item">Inscrições</a>
                <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>
            
            </nav>
        </header>
    <section id="sec-titulo">
        <div class="break"></div>
        <h1 id="titulo">Inscreva-se!</h1>
    </section>
    <main>
    <div class="sec-login">
        
        <form class="formulario-fundo-esquerda" method="post">
        <img class="img-form" src="images/Online games addiction-bro.svg" class="d-block w-100" alt="..."style="width:502px;height:308px;">

      </form>
      <form class="formulario-fundo" method="post">
          <h1 id="label-login">Inscrição</h1>
              <section class="secao">
                  <label class="formulario-label">Número aluno</label>
                   <input class="formulario-box" name="email" type="email" placeholder="Nº">
                   <span class="error" style="color: #FF0000;"></span>
              </section>

              <section class="secao2">                      
                  <label class="formulario-label" for="lblnome">Palavra-passe</label>
                  <input class="formulario-box" name="pass" type="password" placeholder="Palavra-passe">
                  <span class="error" style="color: #FF0000;"></span>
              </section>
              <section class="btnLinha">
                   <button class="butao"type="submit" name="submitLogin" id="submitLogin">Inscrever</button>   
              </section>
      </form>
    
  </div>
    </main>
    <br>
</body>
</html>

<?php
function inscrever(){
    header("Location: exercicio3.php");
}


if(isset($_POST['butao'])) {
    inscrever();
}
?>
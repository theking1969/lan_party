<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lan Party PSI5</title>
        <link rel="stylesheet" href="estilos/styleIncial.css">
        <link rel="icon" href="images\icon_landingpage.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="cabecalho">
            <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">

            <nav class="cabecalho-menu" >
                <a href="index.php" class="cabecalho-menu-item" style="">Lan Party</a>
                <a href="" class="cabecalho-menu-item">Início</a>
                <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
                <a href="inscrever.php" class="cabecalho-menu-item">Inscrições</a>
            </nav>
        </header>
    <main>
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Bem-vindo jogador</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">    A turma PSI5 da escola ESCO preparou uma Lan-party que irá decorrer nas horas de aulas com objetivo de reunir maior número de pessoas para se defrontarem em um torneio de CS:GO.</h2>
                <h2 class="conteudo-principal-escrito-subtitulo" style="text-align:center; font-size: 2em;">Estás à espera do que ? <b>Inscreve-te! <b></h2>
                <div class="conteudo-principal-escrito-butao">
                        <form action="index.php" method="post">
                            <button name="butaoInscreverIndividual" class="butao" value="inscrever">Inscrição Individual</button>
                            <br><br>
                              <button name="butaoInscreverEquipa" class="butao" value="inscrever">Inscrever como equipa!</button>
                          
                        </form>
                      
            
                </div>
            </div>

            <div style="width:642px;height:500px;">
                <div>
                    <div>
                    <img src="images/Online games addiction-bro.svg" class="d-block w-100" alt="..."style="width:642px;height:448px;">
                    </div>
                </div>
            </div>
        </section> 
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
    </body>
    </html>

<?php
$inscrever="";


if(isset($_POST['butaoInscreverIndividual']))
{
    $inscrever = "individual";
    inscrever($inscrever);
}else if(isset($_POST['butaoInscreverEquipa'])){
    $inscrever = "equipa";
    inscrever($inscrever);
}

function inscrever($inscrever){

    switch($inscrever){
        case "individual":
            header("Location: inscrever.php");
            break;
        case "equipa":
            header("Location: inscreverequipa.php");
            break;
    }
    
}
?>

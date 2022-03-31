<?php
session_start();
//ALOOOOOOOOOOOOOOOOOG
//fafaf
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lan Party PSI5</title>
        <link rel="stylesheet" href="estilos/styleIncial.css">
        <link rel="icon" href="images/icon_lan-party.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="cabecalho">
            <img id="img" src="images/icon_lan-party.png"  alt="" width="3%" height="8%">
            <nav class="cabecalho-menu" >
                <a href="" class="cabecalho-menu-item">Início</a>
                <a href="listaExercicios.php" class="cabecalho-menu-item">Sobre o projeto</a>
                <a href="listaExercicios.php" class="cabecalho-menu-item">Inscrições</a>

                <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>
            
            </nav>
        </header>
    <main>
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Bem-vindo jogador</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">A turma PSI5 da escola ESCO preparou uma Lan-party que irá decorrer nas horas de aulas com objetivo de reuinir maior número de pessoas para se defrontarem em um torneio de CS:GO.</h2>
                <h2 class="conteudo-principal-escrito-subtitulo" style="text-align:center; font-size: 2em;">Estás há espera do que ?<br/><br/>Inscrevete!</h2>

                <form method="post" action="inicial.php">
                <button name="butao" class="butao" value="inscrever">Quero me inscrever!</button>
                </form>
            </div>

            <div style="margin-top: 2%;width:642px;height:448px;">
                <div>
                    <div>
                    <img src="images/foto.svg" class="d-block w-100" alt="..."style="width:642px;height:448px;">
                    </div>

                </div>

            </div>

        </section> 
    </main>
        <footer>         
            <section class="rodape-conteudo">
                <h2 style="padding-bottom: 2px; font-family: 'Cabin', sans-serif;line-height: 61px;color:white;">Redes Sociais</h2>               
                    <section class="sec-img" style="padding-bottom: 2px;">
                         <img src="images\1164349_circle_instagram_logo_media_network_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296499_fb_facebook_facebook logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296515_bird_tweet_twitter_twitter logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296504_forum_reddit_reddit logo_icon.svg" alt="" width="4%" height="8%">
                    </section>                        
            </section>         
        </footer>
    </body>
    </html>

<?php
function inscrever(){
    header("Location: listaExercicios.php");
}


if(isset($_POST['butao']))
{
    inscrever();
}
?>

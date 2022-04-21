<?php
session_start();
//ALOOOOOOOOOOOOOOOOOG
//fafafafaffa
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
            <img id="img" src="images\icon_landingpage.png"  alt="" width="3%" height="8%">
            <nav class="cabecalho-menu" >
                <a href="index.php" class="cabecalho-menu-item">Início</a>
                <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
                <a href="inscrever.php" class="cabecalho-menu-item">Inscrições</a>
                
            
            </nav>
        </header>
    <main>
        <h1>Sobre este projeto.</h1>
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

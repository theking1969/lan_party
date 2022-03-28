<?php
session_start();
//ALOOOOOOOOOOOOOOOOOG
//fafa
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicios Online</title>
        <link rel="stylesheet" href="estilos/styleIncial.css">
        <link rel="icon" href="images/Closed_Book_Icon.svg.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="cabecalho">
            <img id="img" src="images/Closed_Book_Icon.svg.png"  alt="" width="3%" height="8%">
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
                <h1 class="conteudo-principal-escrito-titulo">Bem-vindo</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, harum laudantium commodi magni doloremque, eveniet obcaecati nemo ab voluptatem, nisi animi amet autem deserunt ratione perspiciatis. Consequatur accusantium praesentium reprehenderit.</h2>            
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 2%;width:642px;height:448px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/undraw_directions_x53j (2).svg" class="d-block w-100" alt="..."style="width:642px;height:448px;">
                    </div>
                    <div class="carousel-item">
                    <img src="images/undraw_directions_x53j (2).svg" class="d-block w-100" alt="..." style="width:642px;height:448px;">
                    </div>
                
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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




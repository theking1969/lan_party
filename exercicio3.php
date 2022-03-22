<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: inicial.php");
}
$messageCaixa1='';
$messageCaixa2='';
$randomString = '';
    function gerarRandom() {
        $minimo= filter_input(INPUT_POST, "caixa1");
        $maximo=  filter_input(INPUT_POST, "caixa2");
        $listaNumeros='';
        for ($i=0; $i < 20; $i++) { 
            if($i == 0){
                $listaNumeros =  $listaNumeros.''.(mt_rand($minimo,$maximo));
            } 
            else{
                $listaNumeros= $listaNumeros.','.(mt_rand($minimo,$maximo));
            }         
        }
        return $listaNumeros;   
    }    
    if (isset( $_POST ['submit'])) {
        $minimo= filter_input(INPUT_POST, "caixa1");
        $maximo=  filter_input(INPUT_POST, "caixa2");
        if($minimo>$maximo){
            $messageCaixa1 = "Por favor insira um número menor";
            $messageCaixa2 = "Por favor insira um número maior";
        }        
        else if(empty($_POST['caixa1'])){
            $messageCaixa1 = "Vazio por favor preencha a caixa";
            if(empty($_POST['caixa2'])){
                $messageCaixa2 = "Vazio por favor preencha a caixa";
            }   
        }   
        else{
        $randomString=gerarRandom();
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Closed_Book_Icon.svg.png">
    <link rel="stylesheet" href="estilos/styleExercicio3.css">
    <title>Exercicio 3</title>
</head>
<body>
    <header class="cabecalho">   
                <img id="img"src="images/Closed_Book_Icon.svg.png"  alt="" width="3%" height="8%">
                <nav class="cabecalho-menu" >
                    <a href="inicial.php" class="cabecalho-menu-item">Inicio</a>
                    <a href="listaExercicios.php" class="cabecalho-menu-item">Exercicios</a>
                    <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>
                </nav>
    </header>

    <main class="fundo-form">
        <form method="post" class="fundo">
            <h1>Máximo e mínino</h1>
                    <span class="error" style="color: #FF0000;"><?php echo $messageCaixa1;?></span>
                    <input type="number" " name="caixa1" class="caixaValor1" placeholder="Insira valor mínimo"/>
                <span class="error" style="color: #FF0000;"><?php echo $messageCaixa2;?></span>
                <input type="number" name="caixa2" class="caixaValor2" placeholder="Insira valor máximo"/>
                
                <input id= "IDname" type="text" name="name" class="caixa2" disabled value=" <?= $randomString; ?>" />
            <button class="butao"type="submit" name="submit" id="submit">Gerar</button>  
        </form>
    </main>
    <footer>
            <section class="rodape-conteudo">
                <h2 style="padding-bottom: 2px; font-family: 'Cabin', sans-serif;line-height: 61px;color:white;">Redes Socias</h2>               
                    <section class="sec-img">
                         <img src="images\1164349_circle_instagram_logo_media_network_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296499_fb_facebook_facebook logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296515_bird_tweet_twitter_twitter logo_icon.svg" alt="" width="4%" height="8%">
                        <img src="images\5296504_forum_reddit_reddit logo_icon.svg" alt="" width="4%" height="8%">
                    </section>                        
            </section>        
    </footer>
</body>
</html>
<<<<<<< HEAD
<?php
session_start();

$dbHost= 'Localhost';
$dbUsername= 'root';
$Password= '';
$dbName= 'bdlan_party';
$conn = new mysqli($dbHost, $dbUsername, $Password,$dbName) or die ('erro');
?>

<!DOCTYPE html>
<html lang="pt">
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
        <a href="index.php" class="cabecalho-menu-item">Início</a>
        <a href="listaExercicios.php" class="cabecalho-menu-item">Sobre o projeto</a>
        <a href="listaExercicios.php" class="cabecalho-menu-item">õesIncriç</a>

        <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>

    </nav>
</header>
<main>
    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            <form method="post" action="resultados.php">
                <label>Jogo: </label>
                <select name="jogo">
                    <?php
                    $sql = "SELECT ID_equipa1, ID_equipa2 FROM jogos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $equipas = array($row["Equipa1"]);
                            foreach ($equipas as $equipa) {
                                echo '<option>' . $equipa . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
                <br>
            <label>Equipa Vencedora: </label>
            <select name="equipavence">
                <?php
                $sql = "SELECT Nome_Equipa FROM equipas";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $equipas = array($row["Nome_Equipa"]);
                        foreach ($equipas as $equipa) {
                            echo '<option>' . $equipa . '</option>';
                        }
                    }
                }
                ?>
            </select>
            <br>
            <label>Resultado: </label>
            <input type="text" name="resultado">
                <br>
             <input type="submit" name="inserir" value="Inserir Resultado">
            </form>
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
function Inserir(){
    $dbHost= 'Localhost';
    $dbUsername= 'root';
    $Password= '';
    $dbName= 'bdlan_party';
    $conn = new mysqli($dbHost, $dbUsername, $Password,$dbName) or die ('erro');

    $sql = 'INSERT INTO resultados (Resultado, ID_equipa_vencedora) VALUES (' . $_POST['equipavence'] . ')';

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


if(isset($_POST['inserir']))
{
inserir();
}
=======
<?php
session_start();

$dbHost= 'Localhost';
$dbUsername= 'root';
$Password= '';
$dbName= 'bdlan_party';
$conn = new mysqli($dbHost, $dbUsername, $Password,$dbName) or die ('erro');
?>

<!DOCTYPE html>
<html lang="pt">
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
        <a href="index.php" class="cabecalho-menu-item">Início</a>
        <a href="listaExercicios.php" class="cabecalho-menu-item">Sobre o projeto</a>
        <a href="listaExercicios.php" class="cabecalho-menu-item">õesIncriç</a>

        <a href="sair.php" class="cabecalho-menu-item" name="select" value="select" >Sair</a>

    </nav>
</header>
<main>
    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            <form method="post" action="resultados.php">
                <label>Jogo: </label>
                <select name="jogo">
                    <?php
                    $sql = "SELECT ID_equipa1, ID_equipa2 FROM jogos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $equipas = array($row["Equipa1"]);
                            foreach ($equipas as $equipa) {
                                echo '<option>' . $equipa . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
                <br>
            <label>Equipa Vencedora: </label>
            <select name="equipavence">
                <?php
                $sql = "SELECT Nome_Equipa FROM equipas";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $equipas = array($row["Nome_Equipa"]);
                        foreach ($equipas as $equipa) {
                            echo '<option>' . $equipa . '</option>';
                        }
                    }
                }
                ?>
            </select>
            <br>
            <label>Resultado: </label>
            <input type="text" name="resultado">
                <br>
             <input type="submit" name="inserir" value="Inserir Resultado">
            </form>
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
function Inserir(){
    $dbHost= 'Localhost';
    $dbUsername= 'root';
    $Password= '';
    $dbName= 'bdlan_party';
    $conn = new mysqli($dbHost, $dbUsername, $Password,$dbName) or die ('erro');

    $sql = 'INSERT INTO resultados (Resultado, ID_equipa_vencedora) VALUES (' . $_POST['equipavence'] . ')';

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


if(isset($_POST['inserir']))
{
inserir();
}
>>>>>>> 5f7fd1c51626d190a7df3c943a4ad4d82b6e4d82
?>
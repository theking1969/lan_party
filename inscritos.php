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
                <a href="index.php" class="cabecalho-menu-item">Lan Party</a>
                <a href="sobre.php" class="cabecalho-menu-item">Sobre o projeto</a>
            </nav>
        </header>
    <main>

                        <form method="post">

                          <select name="jogadores">
                              <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "bd_lanparty";

                              if ($conn = new mysqli($servername, $username, $password, $dbname)) {
                                echo "conect";

                                $sql = "SELECT * FROM `jogadores`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo '<option> Nome: ' . $row["Nome_jogadores"] . ' / id equipa: ' . $row["ID_equipa"] . '</option>';
                                }
                                }
                              }
                              else {
                                echo "'<option>' ERROR CONECTION '</option>'";
                              }
                               ?>
                          </select>
                          <br>
                          <br>
                          <select>
                              <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "bd_lanparty";

                              if ($conn = new mysqli($servername, $username, $password, $dbname)) {
                                echo "conect";

                                $sql = "SELECT * FROM `equipas`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo '<option> id equipa: ' . $row["ID_Equipa"] . ' / Nome_Equipa: ' . $row["Nome_Equipa"] . '</option>';
                                }
                                }
                              }
                              else {
                                echo "'<option>' ERROR CONECTION '</option>'";
                              }
                               ?>
                          </select>
                          <br>
                          <br>
                          <input type="text" name="pesquisa" value="" style="width: 20rem;" placeholder="Pesquisar Jogadores por id equipa">
                          <br>
                          <br>
                          <input type="submit" name="submit" value="pesquisar">
                        </form>

                        <form style="margin-left: 5rem;">
                          <select>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "bd_lanparty";
                            if ($conn = new mysqli($servername, $username, $password, $dbname)) {
                              echo "'<option>CONECT</option>'";

                              $pesquisa = $_POST['pesquisa'];

                              $sql = "SELECT * FROM `jogadores` where `ID_equipa` = $pesquisa";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo '<option> Nome: ' . $row["Nome_jogadores"] . ' / id equipa: ' . $row["ID_equipa"] . '</option>';
                              }
                              }
                            }
                            else {
                              echo "'<option>ERROR CONECTION</option>'";
                            }
                             ?>
                          </select>
                        </form>

                </div>
            </div>
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
    function pesquisa(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bd_lanparty";
      if ($conn = new mysqli($servername, $username, $password, $dbname)) {
        echo "'<option>CONECT</option>'";

        $pesquisa = $_POST['pesquisa'];

        $sql = "SELECT * FROM `jogadores` where `ID_equipa` = $pesquisa";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '<option> Nome: ' . $row["Nome_jogadores"] . ' / id equipa: ' . $row["ID_equipa"] . '</option>';
        }
        }
      }
      else {
        echo "'<option>ERROR CONECTION</option>'";
      }
    }

    if (isset($_POST['submit'])) {
      pesquisa();
    }
     ?>

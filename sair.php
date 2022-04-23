<?php
    session_start();
    session_destroy();
    setcookie("userEmail", "", time()-3600);
    setcookie("userPass", "", time()-3600);
    header("Location: inicial.php");
?>

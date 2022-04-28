<<<<<<< HEAD
<?php
    session_start();
    session_destroy();
    setcookie("userEmail", "", time()-3600);
    setcookie("userPass", "", time()-3600);
    header("Location: inicial.php");
?>
=======
<?php
    session_start();
    session_destroy();
    setcookie("userEmail", "", time()-3600);
    setcookie("userPass", "", time()-3600);
    header("Location: inicial.php");
?>
>>>>>>> 5f7fd1c51626d190a7df3c943a4ad4d82b6e4d82

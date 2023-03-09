<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        die("Você não tem acesso a está página, faça o login<p><a href=\".\login\login.php\">Logar</p>");
    }

?>
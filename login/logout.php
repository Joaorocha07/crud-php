<!-- BOTÃO SAIR - OS DADOS NÃO VÃO FICAR MAIS SALVOS -->
<?php

if(!isset($SESSION)) {
    session_start();
}

session_destroy();

header("location: ./login.php");

?>
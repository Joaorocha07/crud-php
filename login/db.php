<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'login');

    $connLogin = new mysqli(HOST,USER,PASS,BASE);
    
    if($connLogin->error) {
        die("Falha ao conectar com o banco de dados!".$connLogin->error);
    }

?>
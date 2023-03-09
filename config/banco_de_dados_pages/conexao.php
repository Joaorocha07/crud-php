<?php
    // conexão com banco de dados
    // define('HOST', 'localhost');
    // define('USER', 'root');
    // define('PASS', '');
    // define('BASE', 'crud');

    // $conn = new mysqli(HOST,USER,PASS,BASE);
    
    $conn = mysqli_connect('localhost','root','','crud');


if ($conn->connect_error) {
    die("Falha ao realizar a conexão: " . $conn->connect_error);
}

?>
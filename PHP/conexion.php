<?php
    $servidor = 'localhost';
    $BD = 'bibliotecabd';
    $usuario = 'root';
    $password = '';


    $conectar = new PDO("mysql: server= $servidor; dbname=$BD", $usuario, $password );
?>
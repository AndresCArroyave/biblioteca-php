<?php
    include 'conexion.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];

    //$sql = "INSERT INTO libros values (null, '$titulo', '$autor', '$descripcion')";

    $enviar = $conectar -> prepare ("INSERT INTO libros values (null, :titulo, :autor, :descripcion)");
    $enviar -> bindParam('titulo', $titulo);
    $enviar -> bindParam('autor', $autor);
    $enviar -> bindParam('descripcion', $descripcion);
    $enviar -> execute();

    header('Location: ./formulario.html');
?>
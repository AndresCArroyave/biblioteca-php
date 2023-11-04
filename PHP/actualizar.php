<?php
include 'conexion.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];


try {

    $enviar = $conectar->prepare("UPDATE libros SET titulo = :titulo, autor = :autor, descripcion = :descripcion
     WHERE id_libro = :id");

    $enviar -> bindParam(':id', $id);
    $enviar -> bindParam(':titulo', $titulo);
    $enviar -> bindParam(':autor', $autor);
    $enviar -> bindParam(':descripcion', $descripcion);
    $enviar -> execute();

    header('Location: index.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
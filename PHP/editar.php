<?php

include "conexion.php";
$id = $_GET['id'];
$dato = $conectar->query("SELECT * FROM libros WHERE id_libro='$id'");
$datos = $dato->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/style.css">                             
</head>
<body class="row vh-100 justify-content-center align-items-center">
    <div class="col-4 border border-4 border-dark rounded-5 bg-secondary">
        <h1>EDITAR REGISTROS</h1>
        <form action="actualizar.php" method="POST">
            <div class="mb-3">
              <label class="form-label">TITULO</label>  
              <input type="text" class="form-control" name="titulo" value="<?php echo $datos['titulo']; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">AUTOR</label>
              <input type="text" class="form-control" name="autor" value="<?php echo $datos['autor']; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">DESCRIPCION</label>
              <input type="text" class="form-control " name="descripcion" value="<?php echo $datos['descripcion']; ?>">
            </div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $datos['id_libro']; ?>">
            <button type="submit" class="btn btn-dark text-white mb-3">Editar</button>
          </form>
    </div>
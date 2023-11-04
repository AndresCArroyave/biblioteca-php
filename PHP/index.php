<?php
    include "conexion.php";
    $datos = $conectar -> query("SELECT * FROM libros");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros Registrados</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/style.css">                             
</head>
<body class="row vh-100 justify-content-center">
    <div class="container p-5 ">
        <h1 class="text-black text-center">LIBROS REGISTRADOS</h1>
  <table class="table table-secondary table-hover align-middle">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITULO</th>
      <th scope="col">AUTOR</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">ACCIONES</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $i){?>
    <tr>
      <th scope="row"><?php echo $i['id_libro']; ?></th>
      <td><?php echo $i['titulo']; ?></td>
      <td><?php echo $i['autor']; ?></td>
      <td><?php echo $i['descripcion']; ?></td>
      <td><a class="btn btn-dark" href="editar.php?id=<?php echo $i['id_libro']; ?>">Editar</a></td>
      <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $i['id_libro']; ?>">Borrar</a></td>
    </tr>
    <?php } ?>  

  </tbody>
</table>
       
</div>


    <script src="../JS/bootstrap.js"></script>
</body>
</html>
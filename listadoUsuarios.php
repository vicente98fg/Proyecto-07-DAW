<?php

$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $edad = $_POST["edad"];
  $curso = $_POST["curso"];
  $puntuacion = $_POST["puntuacion"];

  $consulta="INSERT INTO `usuarios`(`id`,`nombre`,`apellidos`,`edad`,`curso`,`puntuacion`) 
  VALUES ('','$nombre','$apellidos','$edad','$curso','$puntuacion')";
  $resultado = $conector->query($consulta);

  $consulta="SELECT * FROM usuarios";
  $resultado = $conector->query($consulta);
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen" href="proyecto7.css" />
</head>
<body>
  
<ul>
  <li><a class="active" href="index.php">Indice</a></li>
  <li><a href="listadoUsuarios.php">Listado Jugadores</a></li>
  <li><a href="registro.php">Registro</a></li>
</ul>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>ID</b></td>
    <td><b>Nombre</b></td>
    <td><b>Apellidos</b></td>
    <td><b>Edad</b></td>
    <td><b>Curso</b></td>
    <td><b>Puntuación</b></td>
  </tr>

  <?php
    foreach ($resultado as $usuarios) {
      echo "<tr>";
      echo "<td>".$usuarios['id']."</td>";
      echo "<td>"."<a href=index.php?nombre=".$usuarios['nombre'].">".$usuarios['nombre']."</a></td>";
      echo "<td>".$usuarios['apellidos']."</td>";
      echo "<td>".$usuarios['edad']."</td>";
      echo "<td>".$usuarios['curso']."</td>";
      echo "<td>".$usuarios['puntuacion']."</td>";
      echo "</tr>";
    }

  ?>

</table>


</body>
</html>
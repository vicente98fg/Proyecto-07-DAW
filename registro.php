
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
  
<link rel="stylesheet" type="text/css" media="screen" href="proyecto7.css" /> 

<ul>
  <li><a class="active" href="index.php">Indice</a></li>
  <li><a href="listadoUsuarios.php">Listado Jugadores</a></li>
  <li><a href="registro.php">Registro</a></li>
</ul>

<BR>

<form action="listadoUsuarios.php" method="post">

  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" value="">
  <br> <br>
  <label for="apellidos">Apellidos</label>
  <input type="text" name="apellidos" id="apellidos" value="">
  <br> <br>
  <label for="edad">Edad</label>
  <input type="text" name="edad" id="edad" value="">
  <br> <br>
  <label for="curso">Curso</label>
  <input type="text" name="curso" id="curso" value="">
  <br> <br>
  <label for="puntuacion">Puntuacion</label>
  <input type="text" name="puntuacion" id="puntuacion" value="">
  <br> <br>
  <button type="submit">Introducir datos</button>

</form>



</body>
</html>
<?php

$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
    if(!empty($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $resultado2 = $conector->query("SELECT * FROM `usuarios` WHERE `nombre` = $nombre");
    }
}

?>

<!DOCTYPE html>
<link rel="stylesheet" href="proyecto7.css"/>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    
<ul>
  <li><a class="active" href="index.php">Indice</a></li>
  <li><a href="listadoUsuarios.php">Listado Jugadores</a></li>
  <li><a href="registro.php">Registro</a></li>
</ul>

    <script src="proyecto7.js">
    </script>

    <div id=titulo>MicroRobots</div>

    <form action="">

        <?php
        foreach ($resultado2 as $usuarios) {
            echo "<p style='text-align: center'><b>Jugador: </b>".$usuarios['nombre']."</p>";
        }
        ?>

        <p style="text-align: center">Siguiente fila:
        <input id= "sig" type="text"></p>
        <p style="text-align: center">Siguiente columna:
        <input id= "sig2" type="text"></p>
        <p style="text-align: center"><input type="submit" type="button" value="Comprobar movimiento" onClick="comprobarMovimiento();"></p>
        <p style="text-align: center">Movimientos realizados:
        <input id= "mov" type="movimientos" value=""></p>
        <p style="text-align: center">Número de movimientos:
        <input type="nummov" value=""></p>
        <p style="text-align: center"><input id="reiniciar" type="button" value="Reiniciar tablero" onClick="window.location.reload()"></p>
        
    </form>
    
    
</body>
</html>
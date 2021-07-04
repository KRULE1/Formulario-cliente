<!DOCTYPE html>
<html>
<head>
    <title>
        PROCESOS CLIENTE
    </title>
    <meta charset="utf8">
</head>
<body>
    <h1>Respuestas del usuario</h1>
<?php
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $nacimiento=$_POST['nacimiento'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $sexo=$_POST['sexo'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    
    echo "El nombre del nuevo cliente es: $nombre <br/>";
    echo "El apellido paterno del nuevo cliente es: $apellidoPaterno <br/>";
    echo "El apellido materno del nuevo cliente es: $apellidoMaterno <br/>";
    echo "La fecha de nacimiento del nuevo cliente es: $nacimiento <br/>";
    echo "La direccion del nuevo cliente es: $direccion <br/>";
    echo "El numero telefonico del nuevo cliente es: $telefono <br/>";
    echo "El sexo del nuevo cliente: $sexo <br/>";
    echo "El correo del nuevo cliente es: $correo <br/>";
    echo "La contraseña del nuevo cliente es: $contrasena <br/>";
    ?>

<p>Los datos son correctos: <a href="http://localhost/holamundo/KRULE/recibimiento%20de%20datos%20cliente.html">Enviar</a>
	<p>Los datos no son correctos: <a href="http://localhost/holamundo/FORMULARIO%20DUE%c3%91O.html">Volver a escribirlos</a>
    
</body>
    </html>
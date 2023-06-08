<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Form HTML</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container">
        <h1>Formulario HTML</h1>
        <form action="" method="POST">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" required placeholder="Nombre completo" />
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" required placeholder="Apellidos completo" />
            <label for="">Telefono</label>
            <input type="text" name="telefono" required placeholder="0000000000" />

            <label for="carrera">Carreras</label>
            <div class="carreras">
                <input type="radio" name="carrera" required />
                <label>Programacion</label>
                <input type="radio" name="carrera" required />
                <label>Maquinas y herramientas</label>
                <input type="radio" name="carrera" required />
                <label>Contabilidad</label>
            </div>

            <label for="">Usuario</label>
            <input type="text" name="usuario" required placeholder="Usuario" />
            <label for="">Contraseña</label>
            <input type="password" name="contrasena" id="" required placeholder="Contraseña" />

            <button name="btn-send">Enviar</button>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['btn-send'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    echo "  <div class='container-answers'>
                <h1>Contenido de el formulario</h1>
                <p>Nombre: $nombre</p>
                <p>Apellidos: $apellido</p>
                <p>Telefono: $telefono</p>
                <p>Carrera: $carrera</p>
                <p>Usuario: $usuario</p>
                <p>Contraseña $contrasena</p>
            </div>";
}

?>
<?php

$conex = mysqli_connect("localhost","root","","formulario");

if (isset($_POST['enviar'])) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $edad = trim($_POST['edad']);
        $sexo = trim($_POST['sexo']);
        $celular = trim($_POST['celular']);
        $fecha = trim($_POST['fecha']);

        $consulta = "INSERT INTO datos(nombre, apellido, edad, sexo, celular, fecha)
        VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$celular', '$fecha')";

        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="registrado">Te has incrito correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ha ocurrido un error</h3>
            <?php
        }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <a href="../../index.html">Atras</a>
        <div class="contenedor">

                <h1>Datos personales</h1>
                <form class="" action="#" method="POST">
                    <tr>
                        <td><label for="" class="label_nombre">Nombres:</label></td>
                        <td><input type="text" name="nombre" value="" placeholder="Ingrese su nombre" ></td>
                    </tr>
                    <tr>
                        <td><label for="" class="label_apellido">Apellidos:</label></td>
                        <td><input type="text" name="apellido" value="" placeholder="Ingrese su Apellido" ></td>
                    </tr>
                    <tr>
                        <td><label for="" class="label_edad">Edad:</label></td>
                        <td><input type="number" name="edad" value="" placeholder="Ingrese su edad"></td>
                    </tr>
                    <tr>
                        <td> <label for="" class="label_sexo">Sexo: </label> </td>
                        <td><input type="radio" name="sexo" value="M"> Masculino
                            <input type="radio" name="sexo" value="F"> Femenino  </td>
                    </tr>
                    <tr>
                        <td><label for="" class="label_celular">Celular:</label></td>
                        <td><input type="text" name="celular" value="" placeholder="Ingrese su numero celular"></td>
                    </tr>
                    <tr>
                        <td><label for="">Nacimiento:</label></td>
                        <td><input type="date" name="fecha" value=""></td>
                    </tr>
                    <div class="botones">
                        <input type="submit" name="enviar" value="Crear" class="boton">
                        <input type="submit" name="" value="Leèr" class="boton">
                        <input type="submit" name="" value="Actualizar" class="boton">
                        <input type="submit" name="" value="Eliminar" class="boton">
                    </div>
                </form>


        </div>
        <?php
        include("leng.php")
        ?>
    </body>
</html>

<?php

// Incluye el archivo de configuración que contiene constantes y configuraciones importantes.
require_once('../config/config.php');

// Incluye la clase Database, que esta relacionada con la conexión a la base de datos.
require_once('../libs/Database.php');

// Incluye el modelo UserModel, que está relacionado con la manipulación de datos de profiles
require_once('../models/UserModel.php');

// Crea una instancia de la clase Database para interactuar con la base de datos.
$data = new Database();

// Obtiene una conexión a la base de datos utilizando el método getConnection() de la clase Database.
$connection = $data->getConnection();

// Crea una instancia de la clase "datos"  y pasa la conexión de la base de datos como parámetro.
$datosModel = new datos($connection);
$unser = $datosModel->Listar();



//include '../controllers/UserController.php';
?>
<!-- Declaración del tipo de documento HTML -->
<!DOCTYPE html>

<!-- Inicio del elemento <html con la especificación del lenguaje -->
<html lang="es">

<!-- Inicio de la sección de encabezado del documento HTML. Aquí se incluyen metadatos y enlaces a recursos externos. -->

<head>
    <!-- Establece la codificación de caracteres a UTF-8, que es ampliamente utilizada y compatible con varios idiomas. -->
    <meta charset="UTF-8">

    <!-- Define las propiedades de la ventana gráfica del navegador, lo que ayuda a controlar cómo se adapta el contenido en dispositivos móviles. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Establece el título de la página que se muestra en la pestaña del navegador. -->
    <title>Prueba</title>

    <!-- Enlace de Bootstrap para aplicar estilos predefinidos. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- contenedor que tiene clases de Bootstrap para centrar verticalmente el contenido en la pantalla. -->
    <div class="container d-flex align-items-center justify-content-center vh-100">

        <!-- Un contenedor con fondo y bordes redondeados que contiene el contenido del formulario. -->
        <div class="bg-light p-4 rounded">

            <!-- Un encabezado de nivel 1 centrado que muestra el título "Profiles". -->
            <h1 class="text-center">
                Formulario Profiles
            </h1>

            <!-- Inicio del formulario que se enviará a index.php usando el método HTTP POST. El formulario tiene una clase "row" para la disposición en filas. -->
            <form action="../controllers/addDatos.php" method="post" id="formulario" class="row">

                <!-- Campo para el primer nombre -->
                <div class="col-md-6 offset-md-3">

                    <!-- titulo que se relacionara con la opcion de ingreso de datos -->
                    <label class="form-label">firts_name</label>
                    <!-- ingreso de los datos con respecto a sus requerimientos -->
                    <input type="text" name="firts_name" id="firts_name" class="form-control">
                </div>

                <!-- Campo para el apellido -->
                <div class="col-md-6 offset-md-3">
                    <!-- titulo que se relacionara con la opcion de ingreso de datos -->
                    <label class="form-label">last_name</label>
                    <!-- ingreso de los datos con respecto a sus requerimientos -->
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>

                <!-- Campo para el correo electrónico -->
                <div class="col-md-6 offset-md-3">
                    <!-- titulo que se relacionara con la opcion de ingreso de datos -->
                    <label class="form-label">email</label>
                    <!-- ingreso de los datos con respecto a sus requerimientos -->
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <!-- Campo para el número de teléfono -->
                <div class="col-md-6 offset-md-3">
                    <!-- titulo que se relacionara con la opcion de ingreso de datos -->
                    <label class="form-label">phone</label>
                    <!-- ingreso de los datos con respecto a sus requerimientos -->
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <!-- Campo para la fecha de nacimiento -->
                <div class="col-md-6 offset-md-3">
                    <!-- titulo que se relacionara con la opcion de ingreso de datos -->
                    <label class="form-label">date_birth</label>
                    <!-- ingreso de los datos con respecto a sus requerimientos -->
                    <input type="date" name="date_birth" id="date_birth" class="form-control">
                </div>

                <!-- Un botón de envío del formulario con estilos de Bootstrap. -->
                <div class="text-center">
                    <!-- botton de envio para mostar o enviar los datos previamente llenados -->
                    <button type="submit" class="btn btn-primary m-2" id="enviar" name="enviar">Enviar</button>
                </div>

            </form>

            <!-- Bloque PHP las inclusiones de clases y controladores que podrían estar relacionados con la manipulación de datos del formulario. -->

        </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Registrados</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>date_birth</th>
                                <Th>Eliminar</Th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($unser as $item) { ?>
                                <tr>
                                    <td>
                                        <?= $item['id'] ?>
                                    </td>
                                    <td>
                                        <?= $item['first_name'] ?>
                                    </td>
                                    <td>
                                        <?= $item['last_name'] ?>
                                    </td>
                                    <td>
                                        <?= $item['email'] ?>
                                    </td>
                                    <td>
                                        <?= $item['phone'] ?>
                                    </td>
                                    <td>
                                        <?= $item['date_birth'] ?>
                                    </td>
                                    <td>
                                        <form action="../controllers/addDatos.php" method="POST">
                                            <input type="hidden" name="identificador" value="<?= $item['id'] ?>">
                                            <button class="btn btn-danger" type="submit" name="eliminar">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php

    ?>



</body>

</html>
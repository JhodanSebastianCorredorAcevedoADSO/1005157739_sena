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
            <form action="index.php" method="post" id="formulario" class="row">

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
                    <input type="text" name="date_birth" id="date_birth" class="form-control">
                </div>

                <!-- Un botón de envío del formulario con estilos de Bootstrap. -->
                <div class="text-center">
                    <!-- botton de envio para mostar o enviar los datos previamente llenados -->
                    <button type="submit" class="btn btn-primary m-2" id="enviar" name="enviar">Enviar</button>
                </div>
            </form>

            <!-- Bloque PHP las inclusiones de clases y controladores que podrían estar relacionados con la manipulación de datos del formulario. -->
            <?php
            // session_start();
            require "config/config.php";
            require "controllers/addDatos.php";
            require "controllers/UserController.php";
            require "libs/Database.php";
            require "models/UserModel.php";
            // require "controllers/addDatos.php";
            ?>
        </div>
    </div>
    

</body>

</html>

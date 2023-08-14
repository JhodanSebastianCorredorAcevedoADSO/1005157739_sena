<?php

// Incluye el archivo de configuración que contiene constantes y configuraciones importantes.
require_once('../config/config.php');

// Incluye la clase Database, que esta relacionada con la conexión a la base de datos.
require_once('../libs/Database.php');

// Incluye el modelo UserModel, que está relacionado con la manipulación de datos de profiles
require_once('../models/UserModel.php');

// validamos los datos 
require_once('../Controllers/UserController.php');



// Crea una instancia de la clase Database para interactuar con la base de datos.
$data = new Database();

// Obtiene una conexión a la base de datos utilizando el método getConnection() de la clase Database.
$connection = $data->getConnection();

// Crea una instancia de la clase "datos"  y pasa la conexión de la base de datos como parámetro.
$datosModel = new datos($connection);

if (isset($_POST['eliminar'])) {
    $id = $_POST['identificador'];
    $datosModel->setid($id);
    // echo $datosModel->getid();
    $datosModel->eliminar();
    

}


// Verifica si se han enviado datos a través del método POST y si están configurados ciertos campos.
if (isset($_POST['firts_name'])) {

    // Obtiene los valores de los campos enviados a través del método POST.
    $firts_name = ($_POST['firts_name']);
    $last_name = ($_POST['last_name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $date_birth = ($_POST['date_birth']);



    // Configura los valores en la instancia de datos (modelo) utilizando métodos set.


    $datosModel->setfirts_name($firts_name);
    $datosModel->setlast_name($last_name);
    $datosModel->setemail($email);
    $datosModel->setphone($phone);
    $datosModel->setdate_birth($date_birth);

    // Llama al método addDatos() en la instancia de datos (modelo) para agregar los datos a la base de datos.
    $datosModel->addDatos();



    header('Location: ../vista/index.php');
    exit;
}
// } else {
//     echo "Faltan datos del formulario.";
// }


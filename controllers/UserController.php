<?php

// Verifica si se ha enviado el campo 'firts_name' mediante el método POST
if (isset($_POST['firts_name'])) {

    // Obtiene los valores de los campos del formulario y los asigna a variables
    $firts_name = $_POST['firts_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_birth = $_POST['date_birth'];

    // Crea un arreglo asociativo con los valores de los campos
    $Datos = array(
        'firts_name' => $firts_name,
        'last_name' => $last_name,
        'email' => $email,
        'phone' => $phone,
        'date_birth' => $date_birth
    );

    // Almacena los datos en la sesión para posterior impresión
    $_SESSION['imprimir'][] = $Datos;

    // Verificar si los campos están vacíos
    if (empty($firts_name) || empty($last_name) || empty($email) || empty($phone) || empty($date_birth)) {
        echo '<div class="alert alert-danger text-center">Complete todos los campos</div>';
    } else {
        // Valida que el correo sea válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-danger text-center">El correo electrónico no es válido</div>';
        // valida si el numero es de tipo numerico
        } elseif (!is_numeric($phone)) {
            echo '<div class="alert alert-danger text-center">El número de teléfono debe contener solo dígitos</div>';
        }
    }
}

// Si existen datos almacenados en la sesión para imprimir, muestra una tabla con los datos
if (!empty($_SESSION['imprimir'])) {
    echo '<table>';
    echo '
            <th>firts_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>phone</th>
            <th>date_birth</th>';

    // Itera a través de los datos almacenados en la sesión para imprimirlos en la tabla
    foreach ($_SESSION['imprimir'] as $itm) {
        echo '<tr>';
        echo '<td style="padding: 10px;">' . $itm['firts_name'] . '</td>';
        echo '<td style="padding: 10px;">' . $itm['last_name'] . '</td>';
        echo '<td style="padding: 10px;">' . $itm['email'] . '</td>';
        echo '<td style="padding: 10px;">' . $itm['phone'] . '</td>';
        echo '<td style="padding: 10px;">' . $itm['date_birth'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}


<?php

// Declaración de una clase que encapsula la lógica para conectar a la base de datos usando PDO
class Database{

    //Declaración de una propiedad privada llamada $connection que almacenará la conexión a la base de datos
    private $connection;

    public function __construct(){

        // conecxion a la base de datos
        $options = [

            // El archivo controla como debe de comportarse el pdo en caso de erroes
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            
            // indicamos que todos los retornos sean con una arrreglo asociativo
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        // Creampos la cadena de conexion toamndo todas las constantes definidas
        $this -> connection = "mysql:host=" .constant('HOST')."; dbname=".constant('DB') ."; charset=" .constant('CHARSET');
        
        // creamos la conexion tipo pdo y pasamos la cadena de conexion los datos validamos y opccion de configuracion 
        $this -> connection = new PDO ($this -> connection, constant('USER'), constant('PASSWORD'), $options);
        
        // le indicamos a la conexion que utilizaremos el juego de las caracteristicas utf8 para los acentos y caracteristicas especiales
        $this -> connection -> exec("SET CHARACTER SET UTF8");

    }

    // definimos ell metodo para retornar la conexion
    function getConnection(){
        return $this -> connection;
    }

    // Método para cerrar la conexión a la base de datos
    function closeConnection(){
        $this -> connection = null;
    }

}
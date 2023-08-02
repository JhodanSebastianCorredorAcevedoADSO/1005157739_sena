<?php

class datos
{

    // Declaración de propiedades protegidas y privadas
    protected $db;

    private $id;

    private $firts_name;

    private $last_name;

    private $email;

    private $phone;

    private $date_birth;

    private $created_at;

    private $updated_at;


    // Constructor privado que recibe un objeto PDO como parámetro
    public function __construct( $connection)
    {
        // Asigna la conexión a la propiedad $db    
        $this -> db = $connection;
    }

    // Métodos mágicos para establecer los valores de las propiedades
    function setid($id)
    {
        $this->$id = $id;
    }

    function setfirts_name($firts_name)
    {
        $this -> firts_name = $firts_name;
    }

    function setlast_name($last_name)
    {
        $this -> last_name = $last_name;
    }

    function setemail($email)
    {
        $this -> email = $email;
    }

    function setphone($phone)
    {
        $this -> phone = $phone;
    }

    function setdate_birth($date_birth)
    {
        $this -> date_birth = $date_birth;
    }

    function setcreated_at($created_at)
    {
        $this -> created_at = $created_at;
    }

    function setupdated_at($updated_at)
    {
        $this -> updated_at = $updated_at;
    }


    // // Métodos para obtener los valores de las propiedades
    function getid()
    {
        return $this -> id;
    }

    function getfirts_name()
    {
        return $this -> firts_name;
    }

    function getlast_name()
    {
        return $this -> last_name;
    }

    function getemail()
    {
        return $this -> email;
    }

    function getphone()
    {
        return $this -> phone;
    }

    function getdate_birth()
    {
        return $this -> date_birth;
    }



    function getcreated_at()
    {
        return $this -> created_at;
    }

    function getupdated_at()
    {
        return $this -> updated_at;
    }



    // Método para agregar datos a la base de datos
    function addDatos()
    {
        // Preparar una sentencia SQL para la inserción
        $sql = "INSERT INTO profiles (first_name, last_name, email, phone, date_birth, id_user) VALUES (:firs, :lastt, :corre, :tele, :dat, :id_user)";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(':firs', $this->firts_name);
        $stm->bindValue(':lastt', $this->last_name);
        $stm->bindValue(':corre', $this->email);
        $stm->bindValue(':tele', $this->phone);
        $stm->bindValue(':dat', $this->date_birth);
        $stm->bindValue(':id_user', 1);
    
        try {
            $stm->execute();
            return true; // Successful insertion
        } catch (PDOException $e) {
            // Handle the exception or error here
            // You can log the error, display a user-friendly message, etc.
            return false; // Insertion failed
        }
    }
}
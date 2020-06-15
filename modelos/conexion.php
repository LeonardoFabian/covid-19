<?php 

//Ramon L. Fabian
//2019-7407
//No soy bueno haciendo videos, pero debo hacerlo 

include("configuracion.php");

class Conexion{

    public $con = null;

    function __construct(){
        $this->$con = mysqli_connect('DB_HOST','DB_USER','DB_PASS','DB_NAME');
    }

    function __destruct(){
        mysqli_close($this->con);
    }

}

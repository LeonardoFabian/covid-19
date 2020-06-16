<?php
//Ramon L. Fabian
//2019-7407
//No soy bueno haciendo videos, pero debo hacerlo 

class ControladorPacientes{

    static public function ctrConsultarCedula($cedula, $url){        
        $tabla = "pacientes";      
        $consulta = ModeloPacientes::mdlConsultarCedula($url, $tabla);
        
    }

    static public function ctrMostrarPacientes($tabla){
        $sql = "select * from {$tabla}";
        $datos = ModeloPacientes::query_array($sql);

        return $datos;
    }

}
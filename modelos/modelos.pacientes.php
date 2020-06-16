<?php 

//Ramon L. Fabian
//2019-7407
//No soy bueno haciendo videos, pero debo hacerlo 

include("conexion.php");

class ModeloPacientes{

    static $instancia = null;

    static public function mdlConsultarCedula($url, $tabla){

        $datos = file_get_contents($url);        
        $datos = json_decode($datos);
        
        //var_dump($datos);

        $cedula = $datos->Cedula;
        //echo $cedula;

        $result = ModeloPacientes::mdlConsultarSiCedulaExiste($cedula, $tabla);   
        
        if($result == "success"){
           

            if(is_array($datos) || is_object($datos)){                      
                
                    $nombre = $datos->Nombres;
                    //var_dump($nombre);
                    $apellido1 = $datos->Apellido1;
                    $apellido2 = $datos->Apellido2;
                    $fechaNacimiento = $datos->FechaNacimiento;
                    $fechaInfeccion = ModeloPacientes::obtenerFechaActual();
                    $foto = $datos->Foto;

                $sql = "            
                    insert into {$tabla}(nombre, apellido1, apellido2, cedula, fecha_nacimiento, fecha_infeccion, foto) 
                    VALUES('{$nombre}','{$apellido1}','{$apellido2}','{$cedula}','{$fechaNacimiento}','{$fechaInfeccion}','{$foto}') ";

                //echo $sql;

                $success = ModeloPacientes::query($sql);

                unset($_POST['cedula'] );

                echo "<script>location.href='pacientes'</script>";
               
                
            }
            
            
        } else {
            unset($_POST['cedula'] );

            echo "<script>location.href='pacientes'</script>";
        }

    }

    static public function obtenerFechaActual(){
        //"1986-09-20 00:00:00.000",
        $anio = date('Y');
        $mes = date('m');
        $dia = date('d');
        $hoy = $dia - 1;

        $fechaActual = "{$anio}-{$mes}-{$hoy} 00:00:00.000";

        return $fechaActual;

    }

    static public function mdlConsultarSiCedulaExiste($cedula, $tabla){

        $query = "select cedula from {$tabla} where cedula = {$cedula}";

        $result = ModeloPacientes::query($query);

        //var_dump($result) ;

        if($result == $cedula){
            echo "<script>alert('Este paciente ya existe en la base de datos')</script>";
            $respuesta = "error";
        } else {
            echo "<script>alert('El paciente fue registrado correctamente')</script>";
            $respuesta = "success";
        }

        return $respuesta;

        

    }

    static public function query($sql){
		if(self::$instancia == null){
			self::$instancia = new Connection();
		}
		$rs = mysqli_query(self::$instancia->conn, $sql);
		//var_dump($rs);
		$final = [];

		while($fila = mysqli_fetch_object($rs)){
			$final[] = $fila;
		}

		return $final;
	}

    static public function query_array($sql){
        if(self::$instancia == null){
            self::$instancia = new Connection();
        }

        $rs = mysqli_query(self::$instancia->conn, $sql);

        $final = [];

        while($fila = mysqli_fetch_assoc($rs)){
            $final[] = $fila;
        }

        return $final;
    }

    static public function completarCampos($url){
        $datos = file_get_contents($url);
        $datos = json_decode($datos);

        var_dump($datos);

        $arreglo = [];
        if(is_array($datos) || is_object($datos)){
           foreach($datos as $paciente){
            for($i = 0; $i < 1; $i++){
                $cedula = $paciente[i]->Cedula; 
                $nombre = $paciente[i]->Nombre; 
            }

            $arreglo[$i] = array($cedula, $nombre);
           }
           echo $arreglo;
        }
    }

}

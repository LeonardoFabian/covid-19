<?php


//Ramon L. Fabian
//2019-7407
//No soy bueno haciendo videos, pero debo hacerlo
?>

<div class="cabecera center">
    <h2>Registro de pacientes</h2>
</div>

<div class="container-md">
    <div>
        <form method="post">
            <div class="form-group">
                <input type="text" name="cedula" id="cedula" placeholder="Introduzca el número de cédula">    
                <button type="submit">Registrar</button>
            </div>

            <?php 
                if(isset($_POST['cedula'])){
                    $cedula = $_POST['cedula'];
                    $url = "http://173.249.49.169:88/api/test/consulta/{$cedula}";  
                    //$url = "vistas/content/{$cedula}.json";
                    $paciente = ControladorPacientes::ctrConsultarCedula($cedula, $url);
                
                }
            ?>    

        </form>
    </div>    

</div>

<div class="container-lg">
    
    <table>   
        <thead>
            <tr>
                <th>foto</th>
                <th>fecha infeccion</th>
                <th>cedula</th>
                <th>nombre</th>
                <th>apellido</th>            
            </tr>        
        </thead>
        <tbody>
            <?php 

            $tabla = 'pacientes';
            $datos = ControladorPacientes::ctrMostrarPacientes($tabla);
            //echo $datos;

            foreach($datos as $infectado){               

                echo "
                    <tr>
                        <td><img src='{$infectado['foto']}' style='width:50px;'></td>
                        <td>{$infectado['fecha_infeccion']}</td>
                        <td>{$infectado['cedula']}</td>
                        <td>{$infectado['nombre']}</td>
                        <td>{$infectado['apellido1']} {$infectado['apellido2']}</td>
                    </tr>
                ";
            }

            ?>

        </tbody>    
    </table>

</div>



	
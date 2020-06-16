<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19</title>
    <link rel="stylesheet" href="vistas/css/estilos.css">
</head>
<body>

<?php 

echo '<div class="container-lg">';

include "modulos/header.php";

if(isset($_GET['route'])){
    if(
        $_GET['route'] == 'pacientes' 
    ){
        include "modulos/".$_GET['route'].".php";
    } else {
        include "modulos/404.php";
    }
} else {
    include "modulos/pacientes.php";
}


include "modulos/footer.php" ;

echo '</div>';

?>
    
</body>
</html>
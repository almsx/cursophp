<?php

//Aqui esta la solucion

/*


https://github.com/almsx/cursophp/blob/master/Dia2/OtraCalculadora.php


*/

?>

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Tus Resultados</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    
<div class="table-responsive">


  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>ID</th>
            <th>Nombre(s)</th>  
            <th>Apellido Paterno</th>  
            <th>Apellido Materno</th>  
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Codigo Postal</th>
            <th>Fecha de Nacimiento</th>
        </tr>  
        </thead> 


<?php
    
    include("../utils/conexionDB7.php");
	$correoApp = $_POST['correoAppFiltro'];
	$direccionApp = $_POST['direccAppFiltro'];
	$nombreapp = $_POST['nombreAppFiltro'];
	
	$queryBusqueda = "SELECT *FROM ClientesTemporal WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%' AND correo LIKE '%".$correoApp."%'";
    echo "La query Filtrada es ".$queryBusqueda;
	
    $run=mysqli_query($dbcon,$queryBusqueda);



        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $nombre = $row[1];  
            $paterno = $row[2];  
            $materno = $row[3];  
            $direccion = $row[4];
            $telefono = $row[5];
            $correo = $row[6];
            $codigo = $row[7];
            $edad = $row[8];
            
        ?>  
  
        <tr>  

            <td><?php echo $id;  ?></td>
            <td><?php echo $nombre;  ?></td>
            <td><?php echo $paterno;  ?></td>  
            <td><?php echo $materno;  ?></td>  
            <td><?php echo $direccion;  ?></td>
            <td><?php echo $telefono;  ?></td> 
            <td><?php echo $correo;  ?></td>  
            <td><?php echo $codigo;  ?></td>
            <td><?php Edad($edad);  ?></td>



            
        </tr>  
  
        <?php } 
        
        ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
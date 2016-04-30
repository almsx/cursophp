<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Tus Resultados</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Tus Resultados</h1>  
  
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
    
    

    include("../utils/conexionDB.php");
	$codigoPostalApp = $_POST['cpBuscador'];
	$direccionApp = $_POST['direccionBuscador'];
	$nombreapp = $_POST['nombreBuscador'];
	$queryBusqueda = "";

    /*Hacer las evaluaciones*/

    //Solo venga nombre
    if(!$codigoPostalApp && !$direccionApp){

        /*Si deseamos que se haga la busqueda completa por Ana, es decir
        es igual si buscamos por "ana" mostrara "Ana" o "ana maria"*/
        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%'";
        /*Si queremos que unicamente sea "Ana"*/
        //$queryBusqueda = "SELECT *FROM Clientes WHERE nombre = '".$nombreapp."'";
        
    }

    //Solo venga direccion
    else if(!$nombreapp && !$codigoPostalApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE direccion LIKE '%".$direccionApp."%'";
        echo "la query es ".$queryBusqueda;

    }

    //solo venga codigo postal
    else if(!$nombreapp && !$direccionApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE codigoPostal LIKE '%".$codigoPostalApp."%'";

    }

    //Combinaciones

    //Venga Vacio Codigo Postal
    else if(!$codigoPostalApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%'";
        echo "la query es ".$queryBusqueda;
       

    }
	
    //Venga Vacio Direccion
    else if(!$direccionApp){

    }
    //Venga Vacio Nombre
    else if(!$nombreapp){

    }

    //Este miuestrame a todos*/
	//$queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%'";
	
    $run=mysqli_query($dbcon,$queryBusqueda); 

        function Edad($fecha){
            list($Y,$m,$d) = explode("-",$fecha);
            echo( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
        };

    /*imprimir el error*/


        if (!$run) {
            printf("Error: %s\n", mysqli_error($dbcon));
            exit();
        }

    //Medir el tamaño de la query//

        //$queryTamano = mysql_num_rows($run);
        //echo "Mide la query ".$queryTamano;


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
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
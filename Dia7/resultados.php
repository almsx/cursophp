<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Tus Resultados</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <form action="resultadosFiltro.php" method="POST">
    <h1 align="center">Tus Resultados</h1> 
         <input type="text" placeHolder="Nombre" name="nombreAppFiltro"></input>
         <input type="text" placeHolder="Direcc" name="direccAppFiltro"></input>
         <input type="text" placeHolder="Correo" name="correoAppFiltro"></input>
         <input type="submit" value="Enviar"></input>
     </form>
  
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
	$correoApp = $_POST['correoBuscador'];
	$direccionApp = $_POST['direccionBuscador'];
	$nombreapp = $_POST['nombreBuscador'];
	$queryBusqueda = "";

    function Edad($fecha){
        list($Y,$m,$d) = explode("-",$fecha);
        echo( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    };

    /*Hacer las evaluaciones*/

    //Solo venga nombre
    if(!$correoApp && !$direccionApp){

        /*Si deseamos que se haga la busqueda completa por Ana, es decir
        es igual si buscamos por "ana" mostrara "Ana" o "ana maria"*/
        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%'";
        /*Si queremos que unicamente sea "Ana"*/
        //$queryBusqueda = "SELECT *FROM Clientes WHERE nombre = '".$nombreapp."'";
        
    }

    //Solo venga direccion
    else if(!$nombreapp && !$correoApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE direccion LIKE '%".$direccionApp."%'";
        echo "la query es ".$queryBusqueda;

    }

    //solo venga codigo postal
    else if(!$nombreapp && !$direccionApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE correo LIKE '%".$correoApp."%'";

    }

    //Combinaciones

    //Venga Vacio Codigo Postal
    else if(!$correoApp){

        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%'";
        echo $queryBusqueda;
    }
	
    //Venga Vacio Direccion
    else if(!$direccionApp){
        
        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND correo LIKE '%".$correoApp."%'";
        //imprimo la query;
        echo "Viene vacio Direccion y la query es ".$queryBusqueda;
        //Crear la tabla Temporal para efecto de filtrado;

        # Creo tabla temporal  
        //$query_create = "CREATE TEMPORARY TABLE ClientesTemporal2 AS ".$queryBusqueda.";";
        $miQuery = "CREATE TEMPORARY TABLE ClientesTemporal3 AS SELECT *FROM Clientes WHERE nombre LIKE '%ana%' AND correo LIKE '%ana@kmmx.com%'";
        
        mysqli_query($dbcon,$miQuery) or die ("Sql error : ".mysqli_error());

    }
    //Venga Vacio Nombre
    else if(!$nombreapp){
        $queryBusqueda = "SELECT *FROM Clientes WHERE direccion LIKE '%".$direccionApp."%' AND correo LIKE '%".$correoApp."%'";
        echo "imprimo la query ".$queryBusqueda;
    } else {
        $queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%'";
    }

    //Este miuestrame a todos*/
	//$queryBusqueda = "SELECT *FROM Clientes WHERE nombre LIKE '%".$nombreapp."%' AND direccion LIKE '%".$direccionApp."%'";
	
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
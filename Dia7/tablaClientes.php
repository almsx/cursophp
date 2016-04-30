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
        $view_users_query="SELECT * from Clientes"; 
        $run=mysqli_query($dbcon,$view_users_query); 

        function Edad($fecha){
            list($Y,$m,$d) = explode("-",$fecha);
            echo( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
        };
  
        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $nombre = $row[1];  
            $paterno = $row[2];  
            $materno = $row[3];  
            $direccion = $row[4];
            $correo = $row[5];
            $codigo = $row[6];
            $edad = $row[7];
            $telefono = $row[8];
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
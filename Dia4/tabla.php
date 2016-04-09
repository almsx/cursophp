<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Lista de Usuarios</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Alumnos</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Nombre</th>  
            <th>Apellido Paterno</th>  
            <th>Apellido Materno</th>  
            <th>Dia</th>  
            <th>Mes</th>  
            <th>Año</th>
            <th>RFC</th>
        </tr>  
        </thead>  
  
        <?php  
        include("conexionDB.php");
        include("calcuRFC.php");
        $view_users_query="SELECT * from misAlumnos"; 
        $run=mysqli_query($dbcon,$view_users_query);  
  
        while($row=mysqli_fetch_array($run))  
        {  
            $nombre=$row[0];  
            $paterno=$row[1];  
            $materno=$row[2];  
            $ano=$row[3];
            $mes=$row[4];
            $dia=$row[5];
            //CalculaMiRFC($nombre,$paterno,$materno,$ano,$mes,$dia);
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $nombre;  ?></td>  
            <td><?php echo $paterno;  ?></td>  
            <td><?php echo $materno;  ?></td>  
            <td><?php echo $dia;  ?></td>  
            <td><?php echo $mes;  ?></td>
            <td><?php echo $ano;  ?></td>  
            <td><?php echo CalculaMiRFC($nombre,$paterno,$materno,$ano,$mes,$dia); ?></td>
            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
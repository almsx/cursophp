<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Lista de Usuarios</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Usuarios HITSS</h1>  
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Nombre</th>  
            <th>Apellido</th>  
    
        </tr>  
        </thead>  
  
        <?php  
        include("base.php");
        $view_users_query="SELECT * from usuariosTest"; 
        $run=mysqli_query($dbcon,$view_users_query);  
  
        while($row=mysqli_fetch_array($run))  
        {  
            $nombre=$row[0];  
            $paterno=$row[1];  
            
        ?>  
  
        <tr>  

            <td><?php echo $nombre;  ?></td>  
            <td><?php echo $paterno;  ?></td>  
            
            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Tus Articulos</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Tus Imagenes</h1>
    <h3 align="center"><a href="archivos.php">Subir Imagen</a></h3>
    <br>
    
<div class="table-responsive">
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>   
            <th>ID</th>
            <th>Fecha Publicación</th>  
            <th>Path</th>  
            <th>Imagen</th>  
            
        </tr>  
        </thead>  
  
        <?php  
        include("../utils/conexionDB8.php");
        $view_users_query="SELECT * from imagenes";


        $run=mysqli_query($dbcon,$view_users_query); 

        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $fecha = $row[2];  
            $imagen = $row[1];  
            
            
            
        ?>  
  
        <tr>  
            
            <td><?php echo $id; ?></td>
            <td><?php echo $fecha;  ?></td>
            <td><?php echo 'http://localhost/cursophp/Dia8/'.$imagen; ?></td>  
            <td><img width="200" height="200" src="<?php echo 'http://localhost/cursophp/Dia8/'.$imagen; ?>"></td>  
            
            

           

            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
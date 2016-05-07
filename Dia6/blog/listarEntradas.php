<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Tus Articulos</title>  
</head>  

  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Tus Articulos</h1>
    <br>
    <h3><a href="panel.php">Ir al Panel de Control</a></h3>
  
<div class="table-responsive">
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>   
            <th>ID</th>
            <th>Titulo de la Noticia</th>  
            <th>Resumen</th>  
            <th>Fecha</th>  
            <th>Autor</th>
            <th>Categoría</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>  
        </thead>  
  
        <?php  
        include("../../utils/conexionDB.php");
        //$view_users_query="SELECT * from noticiasBlog";
        $view_users_query = "
            SELECT 
            noticiasBlog.idNoticia,
            noticiasBlog.fechaPublicacion,
            noticiasBlog.tituloPublicacion,
            noticiasBlog.resumenPublicacion, 
            noticiasBlog.publicacionCompleta, 
            noticiasBlog.usuarioPublica,
            noticiasBlog.categoriaPublica,
            noticiasBlog.idNoticia,
            categoriasBlog.idCategoria,
            categoriasBlog.nombreCategoria,
            usuariosBlog.idUsuario, 
            usuariosBlog.nombres,
            usuariosBlog.pais,
            usuariosBlog.apPaterno,
            usuariosBlog.apMaterno

            FROM noticiasBlog

            LEFT JOIN usuariosBlog ON noticiasBlog.usuarioPublica = usuariosBlog.idUsuario 
            LEFT JOIN categoriasBlog ON noticiasBlog.categoriaPublica = categoriasBlog.idCategoria

            ORDER BY noticiasBlog.fechaPublicacion DESC

            ";


        $run=mysqli_query($dbcon,$view_users_query); 

        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $tituloNoticia = $row[2];  
            $resumen = $row[3];  
            $fecha = $row[1];
            $autor = $row[11].' '.$row[13].' '.$row[14]; 
            $categoria = $row[9]; 
            
            
        ?>  
  
        <tr>  
            <td><?php echo $id; ?></td>
            <td><?php echo $tituloNoticia;  ?></td>
            <td><?php echo $resumen;  ?></td>  
            <td><?php echo $fecha;  ?></td>  
            <td><?php echo $autor;  ?></td>
            <td><?php echo $categoria;  ?></td>
            

            <td>
            
                <form action="modificarNoticia.php" method="POST">
                    <input name="idNoticiaApp" value='<?php echo $id; ?>' />
                    <button class="btn btn-success"> Modificar </button>
                </form>

            </td> 

            <td>
            
                <form action="eliminarNoticia.php" method="POST">
                    <input type="hidden" name="idNoticiaApp" value='<?php echo $id; ?>' />
                    <button class="btn btn-danger"> Eliminar </button>
                </form>

            </td> 


            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
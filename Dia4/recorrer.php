<?php  
        include("conexionDB.php");
        $view_users_query="SELECT * from misAlumnos"; 
        $run=mysqli_query($dbcon,$view_users_query);  
  
        while($row=mysqli_fetch_array($run))  
        {  
            $nombre=$row[0];  
            $paterno=$row[1];  
            
  			echo $nombre.'<br/>';  
        }
  

?>
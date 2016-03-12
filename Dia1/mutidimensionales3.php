<?php

$shop = array( array( 'Nombre' => "Carlos Lopez", 
                      'Telefono' => 5531321143,
                      'Direccion' => 'Avenida Siempre Viva 343',
                      'Correo' => 'correo@gmail.com'
                    ),
               array( 'Nombre' => "Gabriel Martinez", 
                      'Telefono' => 5531321144,
                      'Direccion' => 'Avenida Siempre Viva 344',
                      'Correo' => 'correo@gmail.com'
                    ),
               array( 'Nombre' => "Alberto Mendoza", 
                      'Telefono' => 5531321145,
                      'Direccion' => 'Avenida Siempre Viva 345',
                      'Correo' => 'correo@gmail.com'
                    )
             );

//sort($shop);
rsort($shop);

for ($row = 0; $row < count($shop); $row++)

{
    echo "<li>".$shop[$row]["Nombre"]." su telefono es ".$shop[$row]["Telefono"]." vive en  ".$shop[$row]["Direccion"]. " y su correo es ".$shop[$row]["Correo"]."</li>";
}




?>
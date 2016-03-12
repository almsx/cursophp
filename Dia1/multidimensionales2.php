<?php

$shop = array( array( 'Title' => "Rosas", 
                      'Price' => 125,
                      'Number' => 15 
                    ),
               array( 'Title' => "Gardenias", 
                      'Price' => 755,
                      'Number' => 25,
                    ),
               array( 'Title' => "Margaritas", 
                      'Price' => 200,
                      'Number' => 7 
                    )
             );

$contactos = array('Nombre' => 'Alberto Luebbert', 'Telefono' => '31321143','Direccion'=>'Avenida Siempre Viva', 'Correo'=> 'alberto@ideashappy.com');


//for ($row = 0; $row < count($shop); $row++)
for ($row = 0; $row < count($shop); $row++)

{
    echo "<li>".$shop[$row]["Title"]." cuesta ".$shop[$row]["Price"]." y hay en existencia ".$shop[$row]["Number"]."</li>";
    //echo "<br />";
}




?>
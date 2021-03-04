<?php

    $file = fopen ('fichero.txt', 'w');
    fwrite($file, "Añadido 1 ");
    fwrite($file,"Añadio 2");
    fclose($file);

    file_put_contents('fichero.txt', "Hola Mundo de parte de puyana");


 ?>
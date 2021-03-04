<?php

    $file = fopen ('fichero.txt', 'r');
    while(!feof($file))
    {
        echo  fgetc($file); 
    }
    fclose($file);

    $file = file_get_contents('fichero.txt');
    print_r($file);

 ?>
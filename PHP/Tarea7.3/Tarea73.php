<?php

    $langosta = 51;
    $anguila = 71;
    $caviar = 501;


    echo "El precio de la langosta es de " . $langosta . " €"
    echo "El precio de la anguila es de " . $anguila . " €"
    echo "El precio del caviar es de " . $caviar . " €"

    if ($langosta>50 and $anguila>70) {
        echo "Verdadero"

    } else if ($langosta>50 and $caviar>500) {
        echo "Verdadero"
    } else if ($anguila>70 and $caviar>500) {
        echo "Verdadero"
    } else {
        echo "Falso"
    }


?>
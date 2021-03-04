<?php 
    $filas=5; $columnas = 7;

    print("<table border=2 width=400 align=center");
    for ($i=0; $i<$filas; $i++) {
        echo "<tr>";
        for ($f=0; $f<$columnas; $f++) {
            echo "<td>";
            print "fila: " . $i . " columna: " . $f;
            print ("</td>");
        }
        echo "</tr>";
    }
    echo "</table>";
?>
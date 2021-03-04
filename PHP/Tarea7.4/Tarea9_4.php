<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;  Este suma 1 al valor
        print_r("Probando el operador ++");
        echo ++$a; // a=24
        echo "<br>";
        echo ++$a*2; //24+1=25*2=50 a=25
        echo "<br>";
        echo ++$b; //se incrementa la letra, a la f
        echo "<br>";
        echo ++$b*2; // Error por no ser numerico
        echo "<br>";
    //probando el operador --; Este resta 1 al valor
        print_r("Probando el operador --");
        echo "<br>";
        echo --$a*2; // 25-1=24*2=48
        $b="pepe"; 
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n; Esto seria como $a=$a+n
        print_r("Probando el operador +=n");
        echo "<br>";
        echo $a+=5; //a=24+5=34 34*2=68
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a+=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b+=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b+=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n; Este seria como $a=$a-n
        print_r("Probando el operador -=n");
        echo "<br>";
        echo $a-=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a-=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b-=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b-=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento; // incrementa +1
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        echo $a++;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a++;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a--;
        echo "<br>";
        echo 2*$a;
?>
<?php
$cantidad = $_GET["cantidad"] ?: 347;
$billetes = [500,200,100,20,10,5,2,1];
$totales = [0,0,0,0,0,0,0,0];

 /* if (isset($cantidad)){
    while ($cantidad >= 0 ){
        for ($i = 0; $i <= count($billetes); ) {
            if ($cantidad < $billetes[$i]){
                $cantidad = $cantidad - $billetes[$i];
                $totales[$i]++;
            }else{
                $i = $i +1;
            }
        }

    }

    echo "$totales[0] billets de 500";
    echo "$totales[1] billets de 200";
    echo "$totales[2] billets de 100";
    echo "$totales[3] billets de 50";
    echo "$totales[4] billets de 20";
    echo "$totales[5] billets de 10";
    echo "$totales[6] billets de 5";
    echo "$totales[7] billets de 2";
    echo "$totales[8] billets de 1";
}else{ */
    echo  "Posa la quantitat a la variable quantitat pel QueryString";






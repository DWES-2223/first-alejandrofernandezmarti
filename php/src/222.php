<?php
$base = $_GET['base'];
$exponent = $_GET['exponent'];
if (isset($base) && isset($exponent)){


    $total= 1;
    for ($i = 0; $i < $exponent; $i++) {
        $total *=$base;
    }
    echo $base,"^",$exponent," = ",$total;
}else{
    echo  "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}

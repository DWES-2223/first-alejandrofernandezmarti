<?php
$edad = $_GET['edat'] ?? null;



$edadFutura = $edad + 10;
$edadAntigua = $edad - 10;
$anyoJubilacion = 2023 + (67 - $edad);

if (isset($edad)){
    echo "la teua edad fa 10 anys era  ", $edad - 10, "<br>";
    echo "la teua edad en 10 anys sera  ", $edad + 10, "<br>";

    echo "Es jubilaras en el any ", $anyoJubilacion;
}else{
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}


?>



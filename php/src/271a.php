<?php
extract($_POST);
include ("formRecord.html");
include ("atletes.php");

if (isset($prova,$marca,$atleta,$any,$club,$data,$lloc)){
    if (array_key_exists($prova,$records)){
        $records[$prova]['marca'] = $marca;
        $records[$prova]['atleta'] = $atleta;
        $records[$prova]['any'] = $any;
        $records[$prova]['club'] = $club;
        $records[$prova]['data'] = $data;
        $records[$prova]['lloc'] = $lloc;

    }

}




?>

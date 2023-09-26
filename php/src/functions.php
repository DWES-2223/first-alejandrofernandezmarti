<?php

function esParell(int $num):bool{
    return $num%2==0;
}

function arrayAleatori(int $tam, int $min, int $max):array{
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[$i] = rand($min,$max);
    }
    return $array;
}

function countParells(array &$array): int{
    $totalParells = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (esParell($array[$i])){
            $totalParells++;
        }
    }
    return $totalParells;
}

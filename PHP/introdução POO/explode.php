<?php

$b = "Lorem;ipsum;dolor;sit;amet;consectetur;adipisicing;elit.;Aspernatur;dolor;cum,;quod;id;dolores;nihil;omnis;incidunt;repudiandae;cumque;consequuntur;aliquid;facere;corporis;quas;inventore;ratione;libero;est;sapiente;impedit!";
$array_b = explode(";", $b);
$quantidade_elementos = count($array_b);

var_dump($array_b);
echo $quantidade_elementos;
<?php
$a =array('green','yellow','red','blue','gray','white'); // aqui eu vou usar essa array pra transformar em array em string depois quebrar ela em array novamente

$b = implode(' + ',$a);// aqui a array se torna string pois entra tudo nas mesmas aspas ' variavel '
$c = explode('+',$b); // aqui eu pego a string e torno uma array quebrando em pedaços 

var_dump($b); //e aqui eu faço só olhar o tipo de variaavel mesmo
print_r($c); //aqui eu rodo com o comando de printar array
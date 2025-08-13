<?php

function Loop($num){
    if($num == 0){
        return $num;
    }
    echo $num,"\n";
    Loop($num -1);
}
#Loop(20);


function fatorial($n) {
    if ($n == 0 || $n == 1) {
        return 1; // condição de parada
    } else {
        return $n * fatorial($n - 1); // chamada recursiva
    }
}

// Exemplo de uso
#echo fatorial(5); // Saída: 120


/**
 * recursividade é quando vc chama a função dentro da propria função
 */


$string = "Hello, world!";
$hash_md5 = hash('md5', $string);
$hash_sha1 = hash('sha1', $string);
$hash_sha256 = hash('sha256', $string);


echo "MD5: $hash_md5\n";
echo "SHA-1: $hash_sha1\n";
echo "SHA-256: $hash_sha256\n";

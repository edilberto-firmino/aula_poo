<?php

$max = 20;

$lista = [];

for($i = 1; $i <= $max; $i++){
    $lista["colunas$i"] = $i; // chave -> valor
    
}
$colunas = array_keys($lista); //aqui eu retorno a lista que foi trabalhada la no for

$fp = fopen("exercicios.csv", "w"); // aqui eu abro o arquivo csv no formato de escrita

$dados = [];
for($i = 0; $i < 10; $i++) {     //aqui ele monta o conteudo dentro do arquivo csv passando em cada campo dando seus valores
    $linha = [];
    for($j = 1; $j <= $max; $j++){
        $linha[] = "dado $i - coluna $j";
    }
    $dados[] = $linha;

}
foreach($dados as $linha) {    
    fputcsv($fp, $linha);
}
fclose($fp); // aqui eu fecho o arquivo csv que foi aberto
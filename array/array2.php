<?php

$max = 10;

$lista = [];

for($i = 1; $i <= $max; $i++) {
    $lista ["colum$i"] = $i;  // ele se torna um arrary chave => valor

}
$colunas = array_keys($lista);   //e bem aqui eu ele que saber somente o valor de array_keys - somente o valor da chave

$fp = fopen("colunas.csv", "w"); // bem aqui ele abre o aruqivo csv no formato de "w - whrite"

fputcsv($fp, $colunas);    // aqui ele escreve os nomes das colunas no arquivo CSV passando junto o nome do arquivo

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
fclose($fp);   // aqui ele fecha o arquivo csv  que foi criado la na linha 13 com o nome de $fp por isso tem que dar um nome a fopen
<?php

// function teste(){

//      throw new Exception("Divisão por zero não é permitida!");

// }

// function dividir($dividendo, $divisor) {
//     if ($divisor == 0) {
//         teste();
//     }
//     return $dividendo / $divisor;
// }

// try {
//     echo dividir(10, 0);
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }


// class MeuErroPersonalizado extends Exception {
//     public function mensagemPersonalizada() {
//         return "\nErro personalizado: " . $this->getMessage();
//     }
// }

// try {
//     throw new MeuErroPersonalizado("Ocorreu um erro!");
// } catch (MeuErroPersonalizado $e) {
//     echo $e->mensagemPersonalizada();
// }


// function abrirArquivo($nomeArquivo) {
//     try {
//         $arquivo = fopen($nomeArquivo, "r");
//         if (!$arquivo) {
//             throw new Exception("Não foi possível abrir o arquivo.");
//         }
//         // Processamento do arquivo...
//     } finally {
//         if ($arquivo) {
//             fclose($arquivo);
//         }
//     }
// }
// Abrir um arquivo para leitura
$file = fopen("arquivo.txt", "r");

// Ler o conteúdo do arquivo linha por linha
while (!feof($file)) {
    echo fgets($file);
}

// Fechar o arquivo
fclose($file);

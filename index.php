<?php
$versaoPHP = phpversion();
date_default_timezone_set('America/Fortaleza');
echo "Versão do PHP: " . $versaoPHP ." - Data: ". date('d M Y') . " - Hora: ". date('H:i:s');

require_once "classes/pessoa.php";
require_once "classes/produto.php";
require_once "classes/ManipulaArquivo.php";

echo '<hr>> aula 1 <<hr>';

$miguel = new Pessoa('Miguel',33,'mamador');
$erick = new Pessoa('Erick',15, 'malandroo');

    $miguel->falar("falando <br>");
    $miguel->parar_falar();
    $miguel->falar("a mamãe <br>");
    $miguel->parar_falar();
    $miguel->comer('carne');
    $miguel->parar_comer();
    $miguel->parar_comer();
    $miguel->ano_nascimento(32);


echo '<hr>> aula 2 <<hr>';

$camiseta = new Produto();
$camiseta->nome = 'camiseta php é muito legal';
$camiseta->id = 12536;
$camiseta->setPreco(50);

echo 'Id:'.$camiseta->id;
echo '<br> Descrição da Camiseta: '.$camiseta->nome;
$camiseta->aumentaEstoque(500);
echo '<br> Estoque: '.$camiseta->getEstoque();
$camiseta->aumentaPreco(10);
echo '<br> Valor: '. $camiseta->getPreco();     
$camiseta->setEstoque(100);
echo '<br> Estoque: '.$camiseta->getEstoque();



echo '<hr>> aula 3 <<hr>';

// $a1 = new ManipulaArquivo("abc.txt");
// $a1->escrever("ola mundo ");
// $a1->escrever("escrever no arquivo. ");
// echo $a1->ler();
// unset($a1);
<?php
declare(strict_types = 1);
$versaoPHP = phpversion();
date_default_timezone_set('America/Fortaleza');
echo "Versão do PHP: " . $versaoPHP ." - Data: ". date('d M Y') . " - Hora: ". date('H:i:s');

require_once "classes/escritor.php";
require_once "classes/caneta.php";
require_once "classes/pessoa.php";
require_once "classes/produto.php";
require_once "classes/ManipulaArquivo.php";
require_once "classes/veiculo.php";
require_once "classes/carro.php";
require_once "classes/bicicleta.php";
require_once  "classes/moto.php";



echo '<hr>> aula 1 - introdução a orientação a objetos <<hr>';

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


echo '<hr>> aula 2 - Junção de classes  <<hr>';


$camiseta = new Produto();
$camiseta->nome = 'camiseta php é muito legal';
$camiseta->id = 12536;
$camiseta->setPreco(50);


echo 'cliente: '. $miguel->nome .'<br>';    
echo 'produto: '. $camiseta->nome .'<br>';
echo 'quantidade: '. $camiseta->getEstoque() .'<br>';
echo 'valor: R$'. $camiseta->getPreco();

echo '<hr>> aula 3 construtores e destrutores <<hr>';


echo 'Id:'.$camiseta->id;
echo '<br> Descrição da Camiseta: '.$camiseta->nome;
$camiseta->aumentaEstoque(500);
echo '<br> Estoque: '.$camiseta->getEstoque();
// $camiseta->aumentaPreco(10);
echo '<br> Valor: '. $camiseta->getPreco();     
$camiseta->setEstoque(1);
echo '<br> Estoque: '.$camiseta->getEstoque();



echo '<hr>> aula 4 associação  entre classes <<hr>';
//https://www.youtube.com/watch?v=_K9aBkMr3zE&list=PLbIBj8vQhvm3BSOBDi88iy9BV-l-aQ_00&index=5

$escritor = new Escritor('Edilberto Firmino');
$caneta = new Caneta('Bic');


$escritor->setCaneta($caneta);
$escritor->getCaneta()->escrever();
$escritor->getCaneta()->tampar();
$escritor->getCaneta()->guardou();
$escritor->getCaneta()->pararEscrever();

echo '<hr>> aula 5.1 Herança <<hr>';
//oarte 1 https://www.youtube.com/watch?v=CczCpyiglpc&list=PLbIBj8vQhvm3BSOBDi88iy9BV-l-aQ_00&index=7


$c2  = new Bicicleta('bicicleta','caloi',2);
echo "o veiculo {$c2->getNome()} {$c2->getModelo()} ";
echo "Suporta {$c2->getPassageiros()} passageiros. <br>";
$c2->pedalar();

$c3  = new Moto('Moto','XRE 190',2);
echo "o veiculo {$c3->getNome()} {$c3->getModelo()} ";
echo "Suporta {$c3->getPassageiros()} passageiros. <br>";
$c3->empinar();

echo '<hr>> aula 5.2 Herança <<hr>';
//oarte 2  https://www.youtube.com/watch?v=JQiHGIeZsjU&list=PLbIBj8vQhvm3BSOBDi88iy9BV-l-aQ_00&index=8


$c1  = new Carro('Carro','Gol',5, 4);
echo "o veiculo {$c1->getNome()} {$c1->getModelo()} ";
echo "Suporta {$c1->getPassageiros()} passageiros e tem {$c1->getRodas()} Rodas <br>"; 
//aqui ele trás uma herança lá de carro que faz parentesco do construtor de veiculos com de carro, que se não usar o "parent" ele subscreve o construtor de veiuclo.
$c1->acelerar();

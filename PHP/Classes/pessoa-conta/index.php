<?php
include './conta.php';
include './pessoa.php';

$carlos = new Pessoa();

$carlos->codigo = 10;
$carlos->nome = 'carlos da silva';
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';

echo " \n";

echo "Manipulando o objeto: $carlos->nome \n";

$carlos->Formar('Tecnico em Edificações');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n";

$carlos->Envelhecer(1);
echo"{$carlos->nome} possui {$carlos->idade} anos \n";


$conta_carlos = new Conta();

$conta_carlos->agencia = 6677;
$conta_carlos->codigo = 'cc.1234.567';
$conta_carlos->datadecriacao = '10/07/2024';
$conta_carlos->titular = $carlos->nome;


echo " \n";

echo "Manipulando a Conta de: $conta_carlos->titular \n";
echo "o saldo altual é R$: {$conta_carlos->obtersaldo()} \n";

$conta_carlos->Depositar(20);
echo "foi depositado R$: {$conta_carlos->obtersaldo()} \n";
echo "o saldo altual é R$: {$conta_carlos->obtersaldo()} \n";

$conta_carlos->Retirar(10);
echo "foi retirado R$: {$conta_carlos->obtersaldo()} \n";
echo "o saldo altual é R$: {$conta_carlos->obtersaldo()} \n";
if($conta_carlos->Obtersaldo() >= 1){
    echo'Tô rico!!';
}elseif($conta_carlos->Obtersaldo() == 0){
    echo'pelo menos não estou devendo';
}elseif($conta_carlos->Obtersaldo() < 0){
    echo'agora sim eu to lascado';
    
}

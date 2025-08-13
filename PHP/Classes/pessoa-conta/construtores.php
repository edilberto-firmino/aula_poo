<?php
include_once 'conta.php';
include_once 'pessoa.php';

$carlos =  new Pessoa(10,"carlos da silva", 1.85, 25, "10/04/1976","ensino medio", 650);

echo"---------------------------------------\n";
echo "manipulando o objeto {$carlos->nome}: \n";
echo" ---------------------------------------\n";

echo"formação: \n";
echo "antes: {$carlos->nome} é formado em: {$carlos->escolaridade} \n";
$carlos->Formar('Tecnico em eletrocinca');
echo"depois: {$carlos->nome} é formado em:  {$carlos->escolaridade}: \n";
echo" ---------------------------------------\n";

echo"idade: \n";
echo "antes: {$carlos->nome} possui: {$carlos->idade} anos \n";
$carlos->Envelhecer(1);
echo "depois: {$carlos->nome} possui: {$carlos->idade} anos \n";
echo"---------------------------------------\n";

$conta_carlos = new Conta(6677,"CC.1234.56", "10/07/02", $carlos, 9876, 567.89);

echo"manipulando a conta de {$conta_carlos->titular->nome} \n";
echo"---------------------------------------\n";

echo"conta: \n";
echo "antes: o saldo atual é R\$ {$conta_carlos->Obtersaldo()} \n";
$conta_carlos->Depositar(20);
echo "depois-1: o saldo atual é R\$ {$conta_carlos->Obtersaldo()} \n";
$conta_carlos->Retirar(10);
echo "depois-2: o saldo atual é R\$ {$conta_carlos->Obtersaldo()} \n";
echo"fim: ---------------------------------------\n";

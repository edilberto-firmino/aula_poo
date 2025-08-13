<?php
/**
 * do lado de cá eu deixo o preenchimento dos dados, os valores que vão compor esses dados.
 * posso até dizer lado do usuario
 */
include_once 'produto.php';
include_once 'cliente.php';

$cliente = new Cliente();
$produto = new Produto();

$cliente->Nome = 'Edilberto';
$cliente->Idade = '35';
$cliente->Endereco = 'Captão Manoel Mdeiros - 1325';
$cliente->Sexo = 'Masculino';

$produto->Codigo = 4001;
$produto->Descricao = 'CD - The Best Of Eric Clapton';

echo"cliente: "."\n";
$cliente->ImprimeCadastro();
echo"Produto: "."\n";
$produto->ImprimeEtiqueta();

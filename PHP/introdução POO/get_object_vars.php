<?php
/*
    retorna um vetor com os nomes e conteúdos das propriedades de um objeto. 
    são valores dinâmicos que se alteram de acordo com o ciclo de vida do objeto
*/

class Funcionario{

var $Codigo;
var $Nome;
var $Salario = 586;
var $departamento = 'Contabilidade';

    function SetSalario(){

    }
    function GetSalario(){

    }
    function SetName(){

    }
    function GetName(){

    }


}
$jose = new Funcionario;
$jose->Codigo = 44;
$jose->Nome = 'Jose da Silva';
$jose->Salario += 100;
$jose->departamento = 'Financeiro';


/*
    Nessa Situação eu vou fazer a leitura 
    do Objeto criado apartir da classe e 
    dos novos valores atribuidos ao objeto
*/
print_r(get_object_vars($jose));

/*
Array
(
    [Codigo] => 44
    [Nome] => Jose da Silva
    [Salario] => 686
    [departamento] => Financeiro
)
*/
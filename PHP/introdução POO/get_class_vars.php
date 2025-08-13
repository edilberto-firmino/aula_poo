<?php
/*
    retorna um vetor com os valores 
    das variaveis determinadas dentro da classe
*/

class Funcionario{

var $Codigo;
var $Nome;
var $salario = 586;
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

/*
    nesse caso ele irá trazer 
    os valores das variaveis não as funções 
*/

print_r(get_class_vars('Funcionario')); 


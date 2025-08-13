<?php
//retorna um vetor com os nomes dos metodos de uma determinada classe
class Funcionario{
    function SetSalario(){

    }

    function GetSalario(){

    }
    function SetName(){

    }
    function GetName(){

    }


}

print_r(get_class_methods('Funcionario')); //vai retornar o nome das funções existentes dentro da class


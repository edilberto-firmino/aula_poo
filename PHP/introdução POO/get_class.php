<?php
/*
    retorna o nomme da classe e qual um objeto pertence
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
    get_class
        simplesmnente ele vai retornar o nome da classe a qual o objeto pertence.
    */
    echo(get_class($jose));
    /*
    get_class:
        Funcionario
    */
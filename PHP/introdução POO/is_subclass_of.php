<?php
/*
 * is_dubclass_of
 * indica se um determinado objeto ou classe é derivado de uma determinada classe.
 */

class Funcionario{

var $Codigo;
var $Nome;


}

class Estagiario extends Funcionario{
    var $salario;
    var $bolsa;

}

$jose = new Estagiario;


/**
 * nessa situação o objeto pode ser analisado sua origem(classe pai)
 */
if(is_subclass_of($jose,'Funcionario')){
    echo"Classe do objeto é derivada de funcionario";

}

echo "\n";
/**
 * nessa situação a classe estagiario extend 
 * funcionario e assim retorna verdadeiro 
 * para a classe funcionario também.
 */
if(is_subclass_of('Estagiario','Funcionario')){
    echo"Classe estagiario é derivada de funcionario";

}
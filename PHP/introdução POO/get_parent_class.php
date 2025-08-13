<?php
/*
 * get_parent_class();
 * retorna o nome da classe ancestral(classe-pai). se o parametro doe um onbjeto retona o nome da classe antcestral da classe
 * á qual o objeto pertence. se o parametro for uma string, retorna o nome da classe ancestral da classe passada como parametro.
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


/*
 * nessa situação tanto trazendo o comando "get_parent_class" 
 * no nome do objeto como no nome da classe que herda atributos de outra classe
 * ela vai dizer qual a classe de origem.
 */


 echo get_parent_class($jose);
echo "\n";
echo get_parent_class('Estagiario');


/**
 * php .\get_parent_class.php
 * Funcionario
 * Funcionario
 */
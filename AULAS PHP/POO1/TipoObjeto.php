<?php

Class Computador{
	var $cpu;
	var $power;
	
	function ligar(){
		return "ligar computador a {$this->cpu}...{$this->power}...";
	}
}

$obg = new Computador;

$obg->cpu = "intel";
$obg->power = "500Mgz";
$obg->ligar();
echo $obg->ligar();


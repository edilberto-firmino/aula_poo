<?php

Class Casa
{

    function moveis(){
        return $moveis = ["sofá", "geladeira", "Armarios", "Camas"];
    }

    function eletronicos(){
        return $eletronicos =["Tv", "Som", "Computador", "Maquina de Lavar"];
    }

    function pscina(){
        return $pscina = ["Água", "Boias", "Cascata"];
    }

    function decoracao(){
        return $decoracao = ["quadros", "Lustres", "vasos de plantas"];
    }
}


$morador = new Casa;
echo 'moveis da casa: ';
print_r($morador->moveis());

echo 'eletros da casa: ';
print_r($morador->eletronicos());

echo 'pscina da casa: ';
print_r($morador->pscina());

echo 'decoracao da casa: ';
print_r($morador->decoracao());
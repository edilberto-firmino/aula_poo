<?php

class Calcular{

    public $total = 0;
    function km2mi($quilometros){

        global $total;
        $total += $quilometros;
        return $quilometros * 0.6;
    }

    function calcular_obesidade($peso, $altura){

        return $peso / ($altura * $altura);

    }


}


$velocidade = new Calcular;
echo 'percorreu '. $velocidade->km2mi(100). ' milhas';
echo 'percorreu '. $velocidade->km2mi(200). ' milhas';
echo 'percorreu no total '. $total . 'quilometros';
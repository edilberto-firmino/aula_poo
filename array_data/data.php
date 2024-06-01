<?php

class DataAtual {
    

    function dataformatada(): string {
        $diaMes = date("d");
        $diaSemana = date("w");
        $mes = date("n") - 1;
        $ano = date("Y");

        $nomesDiasdaSemana = [
            "domingo",
            "segunda-feira",
            "terça-feira",
            "quarta-feira",
            "quinta-feira",
            "sexta-feira",
            "sábado",
        ];
        
        $nomeDosMeses = [
            "janeiro",
            "fevereiro",
            "março",
            "abril",
            "maio",
            "junho",
            "julho",
            "agosto",
            "setembro",
            "outubro",
            "novembro",
            "dezembro",
        ];

        $dataFormatada = $nomesDiasdaSemana[$diaSemana]. ", {$diaMes} de {$nomeDosMeses[$mes]} de {$ano}" ;

        return $dataFormatada;
    }
    function dia(){
        $diaSemana = date("w");

        return $diaSemana;
    }

    function horaSexta(){
        $hora = date('H');
    
        if ($hora >= '15') {
            return "novas rotas só poderão ser feitas no proximo dia util apartir das 08:00h";
        } else {
            return "";
        }        if ($hora >= '15') {
            return "novas rotas só poderão ser feitas no proximo dia util apartir das 08:00h";
        } else {
            return "";
        }
    }
    


}
?>

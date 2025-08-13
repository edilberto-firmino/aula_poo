<?php

class Agenda{

    function atividade(){
        return  $compromissos = [
            'correr',
            'me preparar pra trabalhar',
            'ir para o trabalho',
            'trabalhar',
            'voltar para casa',
            'ficar com a familia',
            'treinar',
            'estudar', 
            'dormir'
        ];
    }

    function horario(){

        $agenda = new Agenda(); 
        $result = [
            "05-06" => $agenda->atividade()[0],
            "06-07" => $agenda->atividade()[1],
            "07-08" => $agenda->atividade()[2],
            "08-18" => $agenda->atividade()[3],
            "18-19:30" => $agenda->atividade()[4],
            "19:30-21" => $agenda->atividade()[5],
            "21-22" => $agenda->atividade()[6],
            "22-23" => $agenda->atividade()[7],
            "23:00" => $agenda->atividade()[8],
        ];

        $r = count($result);

        if($result){
            for($i = 0; $i < $r; $i++);
            $agora = $result[$i] . '<';
        }
        return $result  ;

    }

    function nome($nome) {
        return $this->nome = $nome;
    }

    function Contato($contato) {
        return $this->contato;
    }

    function Endereco($endereco) {
        return $this->endereco;
    }


}


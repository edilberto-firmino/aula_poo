<?php
include_once 'data.php';
include_once 'agenda.php';


$dataAtual = new DataAtual();
$rodape=$dataAtual->dataformatada();

$agenda = new Agenda(); 
$pessoa = $agenda->nome('Edilberto');
$hoje = $dataAtual->dia();


if($hoje >= 1 and $hoje <= 5){
    echo $pessoa . " - " . "rotina da semana <br>";
}else{
    echo $pessoa . " - " . "rotina do fim de semana <br>";
}

$atividade = $agenda->atividade();
$horas = $agenda->horario();

$rotina=[];

foreach($horas as $hora => $atividade){
    $rotina[$hora] = $atividade;
}

foreach ($rotina as $hora => $atividade) {
    echo "<br>{$hora}:  - " .$atividade;
}
echo "<br>";
echo "<br>".$rodape;;


?>

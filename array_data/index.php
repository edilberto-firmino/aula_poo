<?php
include_once 'data.php';


$dataAtual = new DataAtual();

$sexta_feira = $dataAtual->dia() == 5;
$horaSexta = $dataAtual->horaSexta();

if ($sexta_feira) {
    if($sexta_feira && $horaSexta){
        echo $horaSexta . "<br>";
    }else{
        echo "hoje é dia de fechar a rota as 15:00, em detrimento da Sexta as atividades se encerrar 1H antes dos demais dias. ". "<br>";
    }
}else{
    echo 'hoje é dia de fechar a rota as 16:00, por favor não perder o horário'  . "<br>";
}






?>

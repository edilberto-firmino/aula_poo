<?php
class Conta{
    var $agencia;
    var $codigo;
    var $datadecriacao;
    var $titular;
    var $senha;
    var $saldo = 0;
    var $cancelada;
    function Retirar($quantia){

        if($quantia > 0){
            $this->saldo -= $quantia;
        }
    }
    function Depositar($quantia){
        if($quantia > 0){
            $this->saldo += $quantia;
        }

    }
    function Obtersaldo(){
        return $this->saldo;
    }
    function __construct($agencia,$codigo,$datadecriacao,$titular,$senha,$saldo){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->datadecriacao = $datadecriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        

        $this->Depositar($saldo);
        $this->cancelada = false;

    }
    function __destruct(){
        echo"objeto conta{$this->codigo} de {$this->titular->nome} finalizada... \n";
    }



}
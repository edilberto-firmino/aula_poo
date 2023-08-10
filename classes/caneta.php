<?php

class Caneta{
    private $nome;
    
    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function escrever(){
    echo "caneta {$this->nome} está escrevendo <br>";
    }

    public function tampar(){
    echo "o escritor tampou a caneta {$this->nome} <br>";
    }

    public function guardou(){
    echo "o escritor guardou a caneta {$this->nome} <br>";
    }

    public function pararEscrever(){
    echo "o escritor parou de escrever com a caneta {$this->nome} <br>";
    }
}
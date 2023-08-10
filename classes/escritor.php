<?php

class Escritor{
    private $nome;
    private $caneta;
    
    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCaneta(Caneta $escrever){ 
        $this->caneta = $escrever;
    }

    public function getCaneta(){
        return $this->caneta;
    }


}
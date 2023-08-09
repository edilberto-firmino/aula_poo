<?php
class Pessoa{
    public $nome;
    public $idade;
    public $profissao;

    private $falando = true;
    private $comendo = true;

    public function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;    
    }   

    
    public function falar($assunto){
        if($this->falando){
            echo "{$this->nome} está falando <br>";
            return;
        }
        if($this->comendo){
            echo"{$this->nome} não pode falar comendo ";
            return;
        }
        echo"{$this->nome} está falando sobre $assunto";
        $this->falando = true;

    }

    public function parar_falar(){
        if(!$this->falando){
            echo "{$this->nome} não está falando <br>";
            return;
        }

        echo "{$this->nome} parou de falar <br>"; 
        $this->falando = false;
    }
    public function comer($alimento){
        if($this->falando){
            echo "{$this->nome} não pode comer falando <br>";
            return;
        }
        if($this->comendo){
            echo "{$this->nome} já está comendo $alimento<br>";
            return;
        }

    }
    public function parar_comer(){
        if(!$this->comendo){
            echo "{$this->nome} não está comendo <br>";
            return;
        }
        echo "{$this->nome} parou de comer <br>";
        $this->comendo = false;
    }
    public function ano_nascimento($idade) {
        $this->idade = $idade;
        echo "{$this-> nome} nasceu em: ". date('Y') - $this->idade.'<br>' ;
    }
}
<?php 

class Produto{
    public $id;
    public $nome;

    private $preco;
    private $estoque = 1; 

    
    public  function getEstoque(){
        return $this->estoque;
    }

    public  function getPreco(){
        return $this->preco;
    }

    public  function setPreco($precovalor){
        if(!is_numeric($precovalor)){
            echo "<br> valor deve ser Numérico";
            return $this->preco = false;
        } 
        else
            $this->preco = $precovalor;
    }

    public function setEstoque($valor){
        if(!is_numeric($valor)){
            echo "<br> valor do estque deve ser Numérico";
            return $this->estoque = false;
        } 
        else
            $this->estoque = $valor;

    }

    public function aumentaEstoque($qtd){
        $novo_estoque = $this->estoque += $qtd;
        $this->setEstoque($novo_estoque);
    }

    public function aumentaPreco($percentual){
        $novo_preco = $this->getPreco() +($this->getPreco() * ($percentual / 100));
        $this->setPreco($novo_preco);
    }

    
}
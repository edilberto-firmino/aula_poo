<?php
/**
 * do lado de cá é onde funciona a regra, o back que diz como vai funcionar a formatação dos dados
 * e a forma como eles serão manipulados.
 */
class Produto {
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

    public function ImprimeEtiqueta(){
        print'Codigo do Produto: '.$this->Codigo."\n"; //formatação do texto para o retorno da variavel 
        print'Descricao do produto: '.$this->Descricao."\n";  // isso da melhor aspecto ao campo da variavel 
    }

}

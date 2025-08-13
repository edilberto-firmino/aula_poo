<?php
/**
 * do lado de cá é onde funciona a regra, o back que diz como vai funcionar a formatação dos dados
 * e a forma como eles serão manipulados.
 */
class Cliente {
    public $Nome;
    public $Endereco;
    public $Idade;
    public $Sexo;

    public function ImprimeCadastro(){
        print'Nome do Cliente: '.$this->Nome."\n";
        print'Endereço Do Cliente: '.$this->Endereco."\n";
        print'Idade do cliente: '.$this->Idade."\n";
        print'Sexo do Cliente: '.$this->Sexo."\n";

    }


}

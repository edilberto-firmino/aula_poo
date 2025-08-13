<?php
class ContaPfis{
    var $number;
    var $name;
    var$cpf;    

    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function gerNumber() : String 
    {
        return $this->number;
        
    }
}

$carlos = new ContaPfis;
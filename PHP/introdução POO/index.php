<?php
class Product
{
    var $name; 
    var $description; 
    var $price;

    function get()
    {
        return "{$this->name}, {$this->description}, {$this->price}";
    }
    function setName($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        echo '<hr>';
        
    }
    function getName()
    {
        return '<br>' . '<hr>'. $this->name;

    }


}
$tv = new Product;

$tv->setName($name ='tv','smart tv',4500); ;

$varviavel = [ 
    $tv->name, 
    $tv->description,
    $tv->price
];

echo ($tv->get()). ': estou chamando o metodo get() <hr>';


foreach( $varviavel as $var){
   echo $var . '<br>';
};


echo $tv->getName(). ': estou chamando o getName() <hr>';
<?php

/**
 * Neste exemplo, tanto a classe Cachorro quanto a classe Gato herdam da classe Animal e substituem (sobrescrevem) 
 * o método fazerSom(). No entanto, ao iterar sobre uma matriz de objetos Animal, cada objeto é tratado como um Animal, 
 * mas a versão apropriada do método fazerSom() é chamada, dependendo do tipo real do objeto.
 */
class Animal {
    public function fazerSom() {
        echo "Som genérico de animal\n";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau!\n";
    }
}

// Uso de polimorfismo
$animais = [new Cachorro(), new Gato()];

foreach ($animais as $animal) {
    $animal->fazerSom(); // Chama o método fazerSom() de cada objeto
}


/**
 * Polimorfismo é um dos princípios fundamentais da programação orientada a objetos (POO)
 *  e refere-se à capacidade de diferentes classes serem tratadas de maneira semelhante através de uma interface comum. 
 * Em PHP, o polimorfismo é frequentemente alcançado através de dois mecanismos principais: sobrescrita de métodos 
 * (métodos com o mesmo nome em classes 
 */

 interface Forma {
    public function calcularArea();
}

class Retangulo implements Forma {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }
}

// Uso de polimorfismo
$formas = [new Retangulo(5, 4), new Circulo(3)];

foreach ($formas as $forma) {
    echo "Área da forma: " . $forma->calcularArea() . "\n";
}
/**
 * Neste exemplo, as classes Retangulo e Circulo implementam a interface Forma, que exige a implementação do método 
 * calcularArea(). Mesmo que as implementações de calcularArea() sejam diferentes em cada classe, 
 * elas podem ser tratadas de maneira uniforme quando utilizadas em um contexto polimórfico.
 */

 /**
  * Esses exemplos ilustram como o polimorfismo em PHP permite que objetos de diferentes classes 
  * sejam tratados de maneira uniforme, simplificando o design e promovendo a flexibilidade e a reutilização de código.
  */
<?php

class Exemplo {
  const MINHA_CONSTANTE = "Sou uma constante!";
  public static $minhaPropEstatica = "Sou uma propriedade estática!";
  
  public static function metodoEstatico() {
    echo "Sou um método estático!\n";
  }

  public function mostrarTudo() {
    echo self::MINHA_CONSTANTE . "\n";         // Constante
    echo self::$minhaPropEstatica . "\n";       // Propriedade estática
    self::metodoEstatico();                     // Método estático
  }
}

$teste = new Exemplo();
$teste->mostrarTudo();

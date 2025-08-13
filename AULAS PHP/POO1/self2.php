<!DOCTYPE html>
<html>
<body>

<?php
class Exemplo {
  const MINHA_CONSTANTE = "Sou uma constante!";
  public static $minhaPropEstatica = "Sou uma propriedade estática!";
  
  public static function metodoEstatico() {
    echo "Sou um método estático!\n";
  }

  public function mostrarTudo($valor) {

    if($valor == 1){
        return self::MINHA_CONSTANTE;
        echo "<br>";
    }elseif($valor == 2){
        return self::$minhaPropEstatica;
        echo "<br>";
    }elseif($valor == 3){
        return self::metodoEstatico();
        echo "<br>";
    }else{
    	return "eu nao sou porra nenehuma";
    }
  }
}

$teste = new Exemplo();
echo $teste->mostrarTudo(6);




?>

</body>
</html>

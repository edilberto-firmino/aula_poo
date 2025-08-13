<?php
function divide($dividend, $divisor) {
  if ($divisor == 0) {
    throw new Exception("problema no dividendo"); //aqui vc passa uma previsao de erro programad, so serve pro catch
  }elseif($dividend == 0){
    throw new Exception("problema no divizor."); //aqui vc passa uma previsao de erro programad, so serve pro catch
  }
  return $dividend / $divisor; //entramos nas condicoes do calculo esperando valores
}

try { // comecamos o bloco de codigo onde o mesmo esta dentro de uma protecao 
  $teste = divide(0, 10);  //passa os valores para esperar um resultado

  if ($teste >= 100) {
    echo " - Caiu no try - "; 
  }

} catch (Exception $e) { // caso a previsao aconteca, ele cai aqui como previsto 
  echo "Erro: " . $e->getMessage(); // aqui podemos esperar duas possibilidades de erro no mesmo codigo
} finally {
  echo " - Process complete."; //fim do codigo
}

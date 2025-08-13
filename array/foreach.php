<?php

$array_objeto = (object)['teste' => 'casa'];

foreach($array_objeto as $chave => $valor){
    echo "  a chave: {$chave} e o valor é {$valor} \n";
    echo"|----------------------------------| \n";

}


$names = ['francisco ', 'edilberto ', 'firmino ', 'da ', 'fonseca'];

foreach ($names as $index => $name) {  //chave => valor, pelo jeito todo array tem esse formato
    echo "  o nome é {$name} no indice é {$index} \n";
    echo"|----------------------------------| \n";

}

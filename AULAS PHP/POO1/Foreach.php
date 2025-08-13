<?php
//o foreach ele sempre vai tratar array, pois ele precisa pegar dado por dado e replicar seu valro
$residencial = ['casa1','casa2','casa3','casa4'];

echo 'casas que tem moradores: ';
foreach ($residencial as $casa){

    echo $casa, ' - ';

}


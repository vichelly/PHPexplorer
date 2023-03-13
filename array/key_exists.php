<?php
$array = [
    'nome' => 'Vitor',
    'idade' => 20,
    'empresa' => 'Agile',
    'cor'=> 'azul',
    'profissao' => 'Dev'
];

if(key_exists('idade', $array)){
    echo 'A idade é '.$array['idade'];
}else{
    echo 'Não existe idade';
}
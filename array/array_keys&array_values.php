<?php
$array = [
    'nome' => 'Vitor',
    'idade' => 20,
    'empresa' => 'Agile',
    'cor'=> 'azul',
    'profissao' => 'Dev'
];

echo 'array_keys as chaves ficam no lugar dos valores <br/>';
$chaves = array_keys($array);
print_r($chaves);

echo'<br/> <br/> array_values faz a mesma coisa porém com os valores<br/>';

$valores = array_values($array);
print_r($valores);
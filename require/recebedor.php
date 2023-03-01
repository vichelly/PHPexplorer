<?php
$nome = filter_input(INPUT_GET, 'nome');

/* if($nome){
    echo 'nome: '.$nome;
} else{
    echo 'Não passou o nome';
}

 */
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);
/* 
if($idade){
    echo '<br />idade: '.$idade;
}else{
    echo '<br />Não passou a idade';
} */

if($nome && $idade){
    echo 'nome: '.$nome;
    echo '<br />idade: '.$idade;
} else{
    header('Location: opa.php');
    exit;
}
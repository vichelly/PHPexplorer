<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome');
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);
require('header.php');

if($nome && $idade){
    
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);
    
    echo 'nome: '.$nome;
    echo '<br />idade: '.$idade;
} else{
    $_SESSION['aviso'] = '<br/><h3>Preencha os items corretamente</h3><br/>';
    header('Location: opa.php');
    exit;
}
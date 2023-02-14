<?php 
$nomeSujo = '          Fujita Felício          ';
echo $nomeSujo;
echo '<br /> ';
echo "Nome sujo: ".$nomeSujo.", caracteres: ".strlen($nomeSujo)."<br />";
echo "Nome limpo: ".trim($nomeSujo).", caracteres: ".strlen(trim($nomeSujo))."<br />";
echo '<br />';

echo strtolower($nomeSujo)."<br />";
echo strtoupper($nomeSujo);
echo '<br /><br />';

$nomeAlterado = str_replace('Fel', 'Flavor', $nomeSujo);
echo $nomeAlterado;
echo '<br /><br />';
$nome = 'Fujita Felício';

$nomeCortado = substr($nome, 1, -5);
echo 'corta uma qnt de caracteres substr($nome, 1, -5): '.$nomeCortado;
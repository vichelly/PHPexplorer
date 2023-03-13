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
echo '<br /><br />';

echo 'procura uma determinada palavra dentro de uma string e devolve sua posição strpos(nome, palavra) <br />';
echo 'por exemplo a posição de E em '.$nome.' posição: '.strpos($nome, 'e');
echo '<br /><br />';

$nomeMinusculo = 'vitor lucas fujita felício';
echo 'transoforma a primeira letra da palavra em maiúscula ucfirst(), todas as primeiras letras das palavras ucwords() <br />';
echo ucfirst($nomeMinusculo).'<br/>';
echo ucwords($nomeMinusculo);
echo '<br /><br />';

echo 'separar nomes em array explode() <br /> ';
$listaDeNomes = explode(' ', $nomeMinusculo);
print_r($listaDeNomes);
echo '<br /><br />';

echo 'formatar números number_format(), neste caso ponto para milhar e vírgula para milhão <br/>';
$numero = 1233.5545;
echo $numero.'<br />';
echo 'número após do format: '.number_format($numero, 2, ',', '.') ;
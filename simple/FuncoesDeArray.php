<?php
$lista = ['nome1','nome2','nome3','nome4','nome5'];
print_r($lista);
echo"<br/> <br/>";

echo "Total de items da lista count() <br />";
echo "Total: ".count($lista);
echo"<br/> <br/>";

echo "Total de items da lista count() <br />";
echo "Total: ".count($lista);
echo"<br/> <br/>";

$listaEnem = ['vitor', 'marcelo', 'joão', 'james','kyrie'];
$listaAprovados = ['vitor', 'kyrie'];
echo 'Pega a diferença entre o primeiro e o segundo, gera um novo array com os itens que não estão na segunda lista array_diff($listaEnem,$listaAprovados) <br />';
echo 'lista total:';
print_r($listaEnem);
echo '<br /> lista dos aprovados';
print_r($listaAprovados);
$reprovados = array_diff($listaEnem,$listaAprovados);
echo '<br/>reprovados, pega a lista geral e remove os que ficaram: ';
print_r($reprovados);
echo"<br/> <br/>";

$numeros = [10,8,23,6,90,17,16,22,1,79];
echo 'filtra algo no array array_filter($numeros, funtion(){}); <br />';
print_r($numeros);
echo '<br />';
$filtrados = array_filter($numeros, function($item){
    if($item<15){
        return true;
    } else{
        return false;
    }
});
echo 'filtrou os números menores de 15: ';
print_r($filtrados);
echo"<br/> <br/>";

echo 'serve para executar algo, neste exemplo retorna o dobro array_map(function($item){} : <br /> ';
$dobrados = array_map(function($item){
    return $item * 2;
}
, $numeros);
echo 'dobrados: ';
print_r($dobrados);
echo"<br/> <br/>";

echo 'array_pop remove o último item do array <br/>';
array_pop($numeros);
print_r($numeros);
echo '<br />';
echo 'array_shift remove o primeiro item do array <br/>';
array_shift($numeros);
print_r($numeros);
echo '<br /> <br />';

echo 'busca algo em um array if(in_array(oqquerencontrar,ondequerencontrar)){}; <br />';
echo 'verifica se o número 90 está no array <br />';
if(in_array(90,$numeros)){
    echo 'O número 90 EXISTE no array <br />';
}else{
    echo 'O número 90 NÃO EXISTE no array <br />';
} ;
echo '<br /> <br />';

echo 'array_search mostra se tem e a posição: <br />';
$pos = array_search(16, $numeros);
echo 'posição do número 16 no array: '.$pos;
echo '<br /> <br />';

echo 'ordena a lista de forma crescente sort() <br />';
sort($numeros);
print_r($numeros);
echo '<br />';
echo 'ordena a lista de forma decrescente rsort() <br />';
rsort($numeros);
print_r($numeros);
echo '<br />';
echo 'manter a chave em relação ao valor asort(), ele mantem o index porém os números estão em ordem crescente <br />';
asort($numeros);
print_r($numeros);
echo '<br /> <br />';

echo 'juntar todos os itens do array em string <br />';
$listaNomes = ['Manuel', 'Rafael', 'Thorfinn', 'Heimmerdinger'];
print_r($listaNomes);
echo '<br />';
$ln = implode(' ', $listaNomes);
echo $ln;
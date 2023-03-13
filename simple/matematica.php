<?php
echo 'transformar número em positivo abs() <br />';
$numeroAbsoluto = -8.7;
echo $numeroAbsoluto;
echo '<br />';
echo abs($numeroAbsoluto);
echo '<br /><br />';

echo 'Número de pi() <br />';
echo pi();
echo '<br /><br />';

echo 'arredondar Para Baixo floor() <br />';
$arredondarParaBaixo = 2.7;
echo floor($arredondarParaBaixo);
echo '<br />arredondar Para Cima ceil() <br />';
$arredondarParaCima = 2.2;
echo ceil($arredondarParaCima);
echo '<br />arredondar Para Mais Proximo round() <br />';
$arredondarParaMaisProx = 2.2;
echo round($arredondarParaMaisProx);
echo '<br />arredondar Para Mais Proximo escolhendo até que casa decimal round(numero, casas decimais) <br />';
$arredondarParaMaisProxDecimal = 2.29378;
echo round($arredondarParaMaisProxDecimal,3);
echo '<br /><br />';

echo 'Número aleatório rand(de tanto, a tanto) <br />';
echo rand(3,9);
echo '<br /><br />';

echo 'Descobrir o número maior da lista max(), descobrir menor min()<br />';
$lista = [1,2,5,7,22,9];
print_r($lista);
echo("<br />");
echo "Maior da lista: ",max($lista),"<br />";
echo  "Menor da lista: ",min($lista),"<br />";
echo '<br /><br />';

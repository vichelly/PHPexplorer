<?php
function subsequente($x){
    for($q=0; $q<$x ; $q++){
        $soma = $x + $q;
        echo $soma.'<br />';
    }
}

subsequente(10);



//função com parametro opcional
//colocar tipo de valor obrigatório colocar o tipo igual C
echo '<br /> <br />';

function soma( int $n1, int $n2, int $n3 = 0){
    $soma = $n1 + $n2 + $n3;
    echo $soma.'<br />';
}

soma(10, 23, 4);
soma(12,23);



//função anonima
echo '<br /> <br />';
$dizimo = function(int $valor){
    return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao(34);



//arrow function
echo '<br /> <br />';
$dizimo = fn($valor) => $valor * 0.1;
echo $dizimo(120);
<?php
$texto = file_get_contents('ex.txt');
$texto = explode("\n",$texto);
echo "Paragrafos: ".count($texto);
echo $texto;
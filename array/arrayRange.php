<?php
$array = range(1,20,2);

foreach($array as $item){
    echo $item.'<br />';
}

$array2 = range('a','g');

foreach($array2 as $item){
    echo $item.'<br />';
}

$array3 = range(16,2);
foreach($array3 as $item){
    echo $item.'<br />';
}
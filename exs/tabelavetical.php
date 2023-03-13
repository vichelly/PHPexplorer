<?php
$array = [
    'nome' => 'Vitor',
    'idade' => 20,
    'empresa' => 'Agile',
    'cor'=> 'azul',
    'profissao' => 'Dev'
];
?>

<table border="1" >
    <?php foreach($array as $chave => $valor): ?>
    <tr>
        <th><?php echo $chave ?></th>
        <td><?php echo $valor ?></td>
    </tr>
    <?php endforeach;?>
</table>
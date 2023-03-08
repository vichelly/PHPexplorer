<?php
echo '<pre>';
print_r($_FILES);
$nome = $_FILES['arquivos']['name'];
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
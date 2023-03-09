<?php
echo '<pre>';
print_r( $_FILES );

if(in_array($_FILES['arquivo']['type'], array('image.jpeg', 'image/jpg', 'image/png'))){
    echo '<br/>arquivo está sendo salvo...';
    $nome = md5(time().rand(0,1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    echo '<br/>arquivo salvo com sucesso';
}else{
    echo 'arquivo não permitido';
}


<?php
session_start();
require('header.php');
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>
<a href="apagar.php">Apagar Cookie</a>
<br/>
<form method="GET" action="recebedor.php" >
    <label>
        Nome:
        <br>
        <input type="text" name="nome" >
    </label>
    <br><br>
    <label>
        Idade:
        <br>
        <input type="text" name="idade">
    </label>
    <br><br>
    <input value="enviar" type="submit">
</form>
<?php
//require e require_once
require_once('template/header.php');
//o once requere apenas uma vez na página
//include = require, porém o include executa normalmente mesmo com 'problemas'
include('config.php');
echo 'NOME DE USUÁRIO (pego do config.php) : '.$usuario;
echo '<br /> <br /><a href="pages/home.php">Home</a>';
echo '<br/><a href="pages/sobre.php">Sobre</a>';
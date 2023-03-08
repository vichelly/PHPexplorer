<?php
// process-file.php
session_start();

require('./helpers.php');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
if ($name) {
  $names = file_get_contents('names.txt');
  $names = clearEmptyLines($names);

  $names .= count(explode("\n", $names)) >= 1 ? "\n$name" : "$name";
  file_put_contents('names.txt', $names);

  $_SESSION['alert-message'] = 'Nome adicionado com sucesso!';
  $_SESSION['alert-type'] = 'alert-success';

  header('Location: index.php');
  exit;
}

$_SESSION['alert-message'] = 'Preencha o formulário corretamente!';
$_SESSION['alert-type'] = 'alert-danger';

header('Location: index.php');
exit;
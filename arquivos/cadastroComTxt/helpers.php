<?php
// helpers.php
// remove linhas em branco do arquivo
function clearEmptyLines($values)
{
  $values = explode("\n", $values);
  $values = array_filter($values, fn ($name) => $name !== "");
  $values = implode("\n", $values);

  return $values;
}